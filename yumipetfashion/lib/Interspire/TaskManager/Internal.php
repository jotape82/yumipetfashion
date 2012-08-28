<?php

/**
* Implementation of task manager queues within ISC product, which is powered by browser requests.
*
* This class implements a lot of functionality that isn't required of the standard TaskManagerInterface, due to it perfoming a lot of work that would otherwise be handled by an external task manager.
*/
abstract class Interspire_TaskManager_Internal implements Interspire_TaskManagerInterface
{
	/** @var int Time in seconds to keep task status log entries */
	const TIME_TO_KEEP_SUCCESSFUL_TASKS = 604800;

	/** @var int Total task status entries to keep logged until pruning begins */
	const TOTAL_LOGGED_TASKS = 10000;

	/** @var int Maximum name of a queue in characters, determined by table schema */
	const MAX_QUEUE_NAME_LENGTH = 128;

	/** @var int Maximum name of a callback class in characters, determined by PHP and table schema */
	const MAX_CALLBACK_CLASS_NAME_LENGTH = 255;

	/**
	* Create a task in a specific queue
	*
	* @param string $queue Name of queue to place task in
	* @param string $class Class name that contains a perform method for this job
	* @param array $data An array of data to send to the job handler (typically an array of key/value pairs but can also be a plain array)
	* @param int $time Set a specific time for this job to execute; the job will not be processed before this time
	* @return mixed A task identifier, the exact type of which may differ depending on the implementation
	* @throws Interspire_TaskManager_InvalidCallbackException
	* @throws Interspire_TaskManager_InvalidArgumentException
	*/
	public static function createTask($queue, $class, $data = array(), $time = Interspire_TaskManager::TIME_NOW)
	{
		if (!class_exists($class)) {
			throw new Interspire_TaskManager_InvalidCallbackException('Class ' . $class . ' does not exist.');
		}

		// verify
		$job = new $class($data);
		if (!is_callable(array($job, 'perform'))) {
			throw new Interspire_TaskManager_InvalidCallbackException('Class ' . $class . ' has no public perform method.');
		}
		unset($job);

		if ($time === Interspire_TaskManager::TIME_NOW) {
			$time = time();
		}

		$insert = array(
			'queue' => $queue,
			'data' => isc_json_encode($data),
			'time' => $time,
		);

		$insert['class'] = $class;

		if (strlen($insert['queue']) > self::MAX_QUEUE_NAME_LENGTH) {
			throw new Interspire_TaskManager_InvalidArgumentException(GetLang('TaskManagerMaximumQueueNameLength', array(
				'length' => self::MAX_CALLBACK_CLASS_NAME_LENGTH,
			)));
		}

		if (strlen($insert['class']) > self::MAX_CALLBACK_CLASS_NAME_LENGTH) {
			throw new Interspire_TaskManager_InvalidArgumentException(GetLang('TaskManagerMaximumClassNameLength', array(
				'length' => self::MAX_CALLBACK_CLASS_NAME_LENGTH,
			)));
		}

		// @todo when available, replace this section with a Model_Task implementation

		/** @var mysqldb */
		$db = $GLOBALS['ISC_CLASS_DB'];
		$id = $db->InsertQuery('tasks', $insert);

		if ($id === false) {
			// @codeCoverageIgnoreStart
			throw new Interspire_TaskManager_TaskSaveException();
			// @codeCoverageIgnoreEnd
		}

		return $id;
	}

	/**
	* Check the specified queue and reserve the next task to run in it, returning details about it for giving to executeTask()
	*
	* @todo when available, replace the return of this method with a Model_Task instance
	*
	* @param string $queue Name of queue to check, if no queue name is given then this will find and return the next task regardless of queue
	* @return array An array containing task data, otherwise false if there is no next task
	*/
	protected static function _reserveNextTask($queue = null)
	{
		/** @var mysqldb */
		$db = $GLOBALS['ISC_CLASS_DB'];

		// blindly stamp the next available task in the queue with a random token and then select by that token...
		// the theory being that this prevents a single task from being picked up twice by two simultaneous threads

		$reservation = md5(uniqid('',true));

		if ($queue) {
			$sql = "UPDATE `[|PREFIX|]tasks` SET `reservation` = '" . $reservation . "' WHERE `queue` = '" . $db->Quote($queue) . "' AND `reservation` = '' ORDER BY `time` LIMIT 1";
		} else {
			$sql = "UPDATE `[|PREFIX|]tasks` SET `reservation` = '" . $reservation . "' WHERE `reservation` = '' ORDER BY `time` LIMIT 1";
		}

		if (!$db->Query($sql) || !$db->NumAffected()) {
			return false;
		}

		// actually select the record that was reserved by the update above

		if ($queue) {
			$sql = "SELECT * FROM `[|PREFIX|]tasks` WHERE `queue` = '" . $db->Quote($queue) . "' AND `reservation` = '" . $reservation . "' ORDER BY `time` LIMIT 1";
		} else {
			$sql = "SELECT * FROM `[|PREFIX|]tasks` WHERE `reservation` = '" . $reservation . "' ORDER BY `time` LIMIT 1";
		}

		return $db->FetchRow($sql);
	}

	/**
	* Executes the task described by the provided data, which is typically the return value of getNextTask()
	*
	* @param array $task
	* @return bool True if the task was executed successfully, otherwise false
	*/
	public static function executeTask($task)
	{
		$class = $task['class'];

		/** @var mysqldb */
		$db = $GLOBALS['ISC_CLASS_DB'];

		// before running the task, delete it from the queue
		$db->DeleteQuery('tasks', "WHERE `id` = " . (int)$task['id']);

		// remove existing status logs to prevent pkey conflict
		$db->DeleteQuery('task_status', "WHERE id = " . (int)$task['id']);

		// copy task to status table with only a begin time
		$status = $task;
		unset($status['time']); // does not apply to status
		$status['begin'] = time();
		unset($status['reservation']);
		$db->InsertQuery('task_status', $status);

		$message = '';
		$data = null;

		if (isset($task['data'])) {
			if ($task['data'] === JSON_NULL) {
				$data = null;
			} else {
				GetLib('class.json');
				$data = ISC_JSON::decode($task['data'], true);
				if ($data === null) {
					self::updateTaskStatus($task['id'], false, GetLang('TaskManagerFailedToDecodeJson'));
					return false;
				}
			}
		}

		/** @var Job_Store_Abstract */
		$job = new $class($data);
		$job->setUp();

		try {
			$success = $job->perform();
			if ($success === null) {
				// if the callback produced no return value, assume success
				$success = true;
			}
			$message = '';
		} catch (Exception $exception) {
			$success = false;
			$message = $exception->__toString();
		}

		$job->tearDown();

		self::updateTaskStatus($task['id'], $success, $message);
		self::pruneTaskStatus();

		return $success;
	}

	/**
	* Update status of a given task id
	*
	* @param int $taskId
	* @param bool $success
	* @param string $message
	* @return void
	*/
	public static function updateTaskStatus($taskId, $success, $message = '')
	{
		$status = array();

		if ($success) {
			$status['success'] = 1;
		} else {
			$status['success'] = 0;
		}

		$status['end'] = time();
		$status['message'] = $message;

		/** @var ISC_LOG */
		$log = $GLOBALS['ISC_CLASS_LOG'];
		$log->LogSystemDebug('general', 'TaskManager_Internal task id ' . $taskId . ' status update.', var_export($status, true));

		$GLOBALS['ISC_CLASS_DB']->UpdateQuery('task_status', $status, "id = '" . (int)$taskId . "'");
	}

	/**
	* Find and return the status of a given task
	*
	* @param int $taskId
	* @return Interspire_TaskManager_Internal_TaskStatus or false if no status found for the task
	*/
	public static function getTaskStatus($taskId)
	{
		return Interspire_TaskManager_Internal_TaskStatus::find((int)$taskId);
	}

	/**
	* Removes successful tasks that are older than TIME_TO_KEEP_SUCCESSFUL_TASKS, and prunes the whole log to a maximum of TOTAL_LOGGED_TASKS
	*
	* @return void
	*/
	public static function pruneTaskStatus()
	{
		/** @var mysqldb */
		$db = $GLOBALS['ISC_CLASS_DB'];

		// prune old task status entries
		$db->DeleteQuery('task_status', "WHERE `begin` < " . (time() - self::TIME_TO_KEEP_SUCCESSFUL_TASKS));

		// trim log to maximum limit
		$sql = "SELECT COUNT(*) FROM `[|PREFIX|]task_status`";
		$count = $db->FetchOne($sql);

		if ($count > self::TOTAL_LOGGED_TASKS) {
			$sql = "DELETE FROM `[|PREFIX|]task_status` ORDER BY `id` ASC LIMIT ". ($count - self::TOTAL_LOGGED_TASKS);
			$db->Query($sql);
			if (mt_rand(1,100) == 1) {
				$db->OptimizeTable('[|PREFIX|]task_status');
			}
		}
	}

	/**
	* Executes the next task in the given queue
	*
	* @param string $queue Name of queue to check, if no name is given the next task to run will be executed regardless of queue
	* @param array $task This by-reference value will be populated with information on the task (equivalent to calling getNextTask)
	* @return mixed If a task was not executed a null value will be returned, otherwise true or false will be returned depending on the successful (or not) execution of a task
	*/
	public static function executeNextTask($queue = null, &$task = null)
	{
		$task = self::_reserveNextTask($queue);
		if ($task === false) {
			return null;
		}
		return self::executeTask($task);
	}

	/**
	* @return bool
	*/
	public static function hasTasks()
	{
		/** @var mysqldb */
		$db = $GLOBALS['ISC_CLASS_DB'];

		$sql = "SELECT `id` FROM `[|PREFIX|]tasks` LIMIT 1";
		$result = $db->FetchOne($sql);
		if ($result === false) {
			return false;
		}
		return true;
	}

	/**
	* Handler for browser requests meant to trigger the internal task manager queue processor
	*
	* @return mixed If a task was not executed a null value will be returned, otherwise true or false will be returned depending on the successful (or not) execution of a task
	*/
	public static function handleTriggerRequest()
	{
		@ignore_user_abort(true);

		// run the task, if any
		self::executeNextTask();

		// count remaining tasks
		$remaining = self::hasTasks();

		// present a dummy request according to browser specification
		$format = strtolower(@$_GET['format']);

		header("Expires: Mon, 23 Jul 1993 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0, max-age=0", false);

		switch ($format) {
			case 'img':
			case 'div':
				// output a 1x1 gif

				// this is a base64 encoded gif - if the data needs to be replaced, it can be generated like this example:
				//$image = ISC_BASE_PATH . '/admin/images/1x1.gif';
				//$image = file_get_contents($image);
				//$image = base64_encode($image);

				while (@ob_end_clean()) { }
				header('Content-Type: image/gif');
				echo base64_decode('R0lGODlhAQABAIcAAP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');
				break;

			case 'json':
				$response = array(
					'remaining' => $remaining,
				);
				GetLib('class.json');
				ISC_JSON::output($response);
				break;

			default:
				// default is an empty js document
				header('Content-Type: text/javascript');
				break;
		}
		die();
	}

	/**
	* Returns an HTML string containing tags that
	*
	* @param string $format The desired output format.
	*/
	public static function getTriggerHtml($format = 'js')
	{
		$handler = GetConfig('ShopPath') . '/admin/taskmanager.php?format=' . rawurlencode($format);

		switch (strtolower($format)) {
			case 'img':
				return '<img src="' . isc_html_escape($handler) . '" width="1" height="1" alt="" />';

			case 'div':
				return '<div style="background:url(' . isc_html_escape($handler) . ');"></div>';

			case 'json':
				$handlerJs = isc_json_encode($handler);
				$return = '<script language="javascript" type="text/javascript" src="' . GetConfig('ShopPath') . '/javascript/TaskManager/Internal.js"></script>';
				$return .= "
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
jQuery(function(){
	window.taskManager = new TaskManager({
		url: " . $handlerJs . "
	});
});
//]]></script>";
				return $return;

			default:
				$handlerJs = isc_json_encode($handler);
				return "
<script language=\"javascript\" type=\"text/javascript\">//<![CDATA[
(function(\$){
	window.setTimeout(function(){
		\$.active--;
		\$.ajax({
			url: " . $handlerJs . ",
			complete: function(){
				\$.active++;
			}
		});
	}, 1000);
})(jQuery);
//]]></script>
";
		}
	}
}
