<?php
/**
 * Changes to version 3
	. orders GetOrder data/items/item/ordprodoptions is now a serialised string (ISC-904)
		# version 2 (incorrect tag name)
		<ordprodoptions>
			<model number><![CDATA[111]]></model number>
			<cover type><![CDATA[hard cover]]></cover type>
			<style & color><![CDATA[classic red]]></style & color>
		</ordprodoptions>

		# version 3
		<ordprodoptions><![CDATA[model number: 111, cover type: hard cover, style & color: classic red]]></ordprodoptions>
	. orders GetOrder now include an order_addresses section (ISC-1026)
	. products GetProduct data/variations/item is now included (ISC-1022)
		# version 2 (none)

		# version 3 (enabled combo included)
		<item>
			<name><![CDATA[model number: 111, cover type: no cover, style & color: classic red]]></name>
			<id><![CDATA[59249]]></id>
			<price><![CDATA[$24.95]]></price>
			<sku><![CDATA[sku-code-001]]></sku>
			<weight><![CDATA[2.00 LBS]]></weight>
		</item>
	. fixed multiple CDATA section code
		# version 2 (missing opening angle bracket)
		xxx]]]]>![CDATA[>xxx

		# version 3
		xxx]]]]><![CDATA[>xxx
	. added output validation and indentation, returns list of libxml errors is validation failed
		<errormessage>Opening and ending tag mismatch: ordprodoptions line 1 and style</errormessage>
 */
class XMLAPI
{
	const VERSION_CODE = 3;

	/**
	 * @var string The XML request string.
	 */
	protected $requestXML = '';

	/**
	 * @var object The SimpleXML representation of the supplied XML.
	 */
	public $request = null;

	/**
	 * @var array Array of details of the user accessing the API.
	 */
	protected $authenticatedUser = array();

	/**
	 * The constructor. Setup and handle the XML request.
	 */
	public function __construct($request)
	{
		if(!$request) {
			$this->BadRequest('A valid XML request to the API was not supplied.');
			return;
		}

		// Store the request XML locally
		$this->requestXML = $request;

		// Attempt to parse the XML
		try {
			$this->request = new SimpleXMLElement($request);
		}
		catch(Exception $e) {
			$this->BadRequest('The XML supplied was not valid.');
			return;
		}

		$requiredNodes = array(
			'username',
			'usertoken',
			'requesttype',
			'requestmethod',
			'details'
		);
		foreach($requiredNodes as $node) {
			if(empty($this->request->$node)) {
				$this->BadRequest('The supplied XML does not contain the '.$node.' node. This is a required field.');
				return;
			}
		}

		if(!$this->AuthenticateUser($this->request->username, $this->request->usertoken)) {
			$this->BadRequest('The supplied username and usertoken were unable to be verified. Please ensure that the details are valid and the user has API access.');
		}

		if(!$this->RouteRequest($this->request->requesttype, $this->request->requestmethod)) {
			$this->BadRequest('The supplied requesttype or requestmethod are invalid. Please check that you are calling a valid API method and try again.');
		}
	}

	private function AuthenticateUser($username, $token)
	{
		$query = "
			SELECT pk_userid
			FROM [|PREFIX|]users
			WHERE
				username='".$GLOBALS['ISC_CLASS_DB']->Quote((string)$username)."' AND
				usertoken='".$GLOBALS['ISC_CLASS_DB']->Quote((string)$token)."' AND
				userstatus=1 AND
				userapi=1
		";
		$userId = $GLOBALS['ISC_CLASS_DB']->FetchOne($query);
		if(!$userId) {
			return false;
		}

		return true;
	}

	private function RouteRequest($controller, $action)
	{
		// Invalid controller or action supplied
		if(preg_match('#[^a-z0-9\_-]#i', $controller) || preg_match('#[^a-z0-9\_-]#i', $action)) {
			echo __LINE__;
			return false;
		}

		$action = 'Action_'.$action;
		$controllerFile = 'class.'.strtolower($controller).'.api.php';
		$controllerClass = 'API_'.strtoupper($controller);

		$controllerPath = ISC_BASE_PATH.'/includes/classes/api/'.$controllerFile;
		if(!file_exists($controllerPath)) {
			return false;
		}

		require_once ISC_BASE_PATH.'/includes/classes/api/class.base.api.php';
		require_once $controllerPath;

		if(!class_exists($controllerClass)) {
			return false;
		}

		if(!method_exists($controllerClass, $action)) {
			return false;
		}

		$instance = new $controllerClass($this);
		$result = call_user_func(array($instance, $action));
		if($result !== false) {
			$this->SendResponse($result);
		}
		return true;
	}

	protected function SendResponse($output)
	{
		$res  =  '<?xml version="1.0" encoding="'.GetConfig('CharacterSet').'" ?>';
		$res .= '<response>';
		$res .= '<status>SUCCESS</status>';
		$res .= '<version>' . self::VERSION_CODE . '</version>';
		$res .= '<data>';
		$res .= $this->CreateOutput($output);
		$res .= '</data>';
		$res .= '</response>';

		$error = '';
		if (Interspire_Xml::validateXMLString($res, $error)) {
			// send the correctly formatted output
			header('Content-Type: text/xml');
			echo Interspire_Xml::prettyIndent($res);
		} else {
			$this->BadRequest($error);
		}

		exit;
	}

	protected function BadRequest($message)
	{
		$res  = '<?xml version="1.0" encoding="'.GetConfig('CharacterSet').'" ?>';
		$res .= '<response>';
		$res .= '<status>FAILED</status>';
		$res .= '<version>' . self::VERSION_CODE . '</version>';
		$res .= '<errormessage>';
		$res .= $message;
		$res .= '</errormessage>';
		$res .= '</response>';

		header('Content-Type: text/xml');
		echo Interspire_Xml::prettyIndent($res);
		exit;
	}

	public function CreateOutput($output)
	{
		if($output === '') {
			return '';
		}
		else if (!is_array($output)) {
			return '<![CDATA['.Interspire_Xml::escapeCdata($output).']]>';
		}

		$xml_output = '';
		foreach ($output as $name => $data) {
			if (is_numeric($name)) {
				$name = 'item';
			}

			if($data === '') {
				$xml_output .= '<'.$name.' />';
				continue;
			}

			if (!is_array($data)) {
				$xml_output .= '<'.$name.'><![CDATA['.Interspire_Xml::escapeCdata($data).']]></'.$name.'>';
				continue;
			}

			$xml_output .= '<'.$name.'>';

			if (is_array($data)) {
				foreach ($data as $k => $v) {
					if (is_array($v)) {
						$xml_output .= '<item>'.$this->CreateOutput($v).'</item>';
						continue;
					}
					if (is_numeric($k)) {
						$k = 'item';
					}

					if($v === '') {
						$xml_output .= '<'.$k.' />';
						continue;
					}

					$xml_output .= '<'.$k.'><![CDATA['.Interspire_Xml::escapeCdata($v).']]></'.$k.'>';
				}
			}
			$xml_output .= '</'.$name.'>';
		}

		return $xml_output;
	}
}