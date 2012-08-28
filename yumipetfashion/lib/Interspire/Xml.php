<?php
/**
 * Library class for generic XML methods.
 *
 * supports attributes but not namespaces
 * special indexes are @attributes and @value
 * children with the same name are flattened into numerical array
 *
 * always use utf-8 encoding
 * CDATA tag will be added if a special char is detected
 * ']]>' in CDATA tag will be automatically escaped
 */
class Interspire_Xml
{
	/**
	 * turn an array into xml string, including tag attribute
	 *
	 * @param  array  $input The input array
	 * @param  string $root  The root tag name
	 * @param  string $tag   Default tag name to use if a numeric key is found
	 * @param  object $xml   The SimpleXMLElement object (for recursive calls)
	 * @return string
	 * @see unit test for more info
	 */
	public static function array2xml($input, $root='<data/>', $tag='item', $xml=null)
	{
		if (!is_array($input)) {
			return '';
		}

		if ($xml == null) {
			// start here
			$xml = simplexml_load_string($root);
		}

		foreach ($input as $key => $val) {
			if (is_numeric($key)) {
				$key = $tag;
			}

			if (is_array($val)) {
				if (isset($val['@attributes'])) {
					$node = null;
					if (!is_array($val['@value'])) {
						// attribute + text
						$node = self::_processValue($key, $val['@value'], $xml);
					} else {
						// attribute + recursive
						$node = $xml->addChild($key);
						self::array2xml($val['@value'], '', $tag, $node);
					}

					foreach ($val['@attributes'] as $k => $v) {
						$node->addAttribute($k, $v);
					}
				} else {
					// normal + recursive
					$node = $xml->addChild($key);
					self::array2xml($val, '', $tag, $node);
				}
			} else {
				// normal + text
				self::_processValue($key, $val, $xml);
			}
		}

		$res = $xml->asXml();
		return $res;
	}


	/**
	 * turn SimpleXMLElement into an array
	 *
	 * @param  object  $input The input SimpleXMLElement
	 * @param  string  $tag   Flatten this tag to normal numeric index if found
	 * @param  boolean $start Internal indicator, do no modify
	 * @return string
	 * @see array2xml()
	 */
	public static function xml2array($input, $tag='item', $start=true)
	{
		$result = array();
		if (is_object($input)) {
			$value = array();
			foreach ($input->children() as $name => $child) {
				$next = self::xml2array($child, $tag, false);
				if ($name == $tag) {
					// flatten this
					$value[] = $next;
				} else {
					$value[$name] = $next;
				}
			}

			if (empty($value)) {
				$text = trim((string) $input);
				if (strlen($text) != 0) {
					$value = $text;
				}
			}

			$attributes = array();
			foreach ($input->attributes() as $k => $v) {
				$attributes[$k] = (string) $v;
			}

			if (!empty($attributes)) {
				$result['@attributes'] = $attributes;
				$result['@value'] = $value;
			} else {
				if ($start && !is_array($value)) {
					// '<simple>tag</simple>
					$result[$input->getName()] = $value;
				} else {
					$result = $value;
				}
			}
		}

		return $result;
	}


	/**
	 * bundle all methods to turn array into xml response with validation
	 *
	 * @param  array $input The response array
	 * @return string
	 */
	public static function getResponse($input, $root='<response/>')
	{
		$root = self::getDeclaration().$root;
		$xml = self::array2xml($input, $root);
		if (self::validateXMLString($xml)) {
			$xml = self::prettyIndent($xml);
		} else {
			// error
			$xml =  self::prettyIndent($root);
		}

		return $xml;
	}


	/**
	 * check if a string is well formatted XML
	 *
	 * generate error message for malformed XML
	 *
	 * @param  string $input The input string
	 * @param  string $error Reference string to hold error/warning messages
	 * @return boolean
	 */
	public static function validateXMLString($input, &$error='')
	{
		$val = libxml_use_internal_errors(true);
		libxml_clear_errors();
		$dom = new DOMDocument();
		if (!@$dom->loadXML($input)) {
			$errors = libxml_get_errors();
			foreach ($errors as $e) {
				$error .= $e->message;
			}

			libxml_use_internal_errors($val);
			return false;
		}

		libxml_use_internal_errors($val);
		return true;
	}


	/**
	 * indent/format XML string nicely
	 *
	 * @param  mixed  $input The input string or simplexml object
	 * @return string formatted XML or empty string on failure
	 */
	public static function prettyIndent($input)
	{
		$result = $input;
		if (function_exists('dom_import_simplexml')) {
			$dom = new DOMDocument('1.0');
			if (@$dom->loadXML($input)) {
				$dom->preserveWhiteSpace = false;
				$dom->formatOutput = true;
				$result = $dom->saveXML();
			}
		}

		return $result;
	}


	/**
	 * return the charset (http header)/encoding (xml declaration)
	 *
	 * @param  array $input The input array
	 * @return string
	 */
	public static function getCharset()
	{
		// always use utf-8
		$charset = 'utf-8';
		if (getConfig('CharacterSet')) {
			//$charset = strtolower(getConfig('CharacterSet'));
		}

		return $charset;
	}


	/**
	 * return the xml declaration
	 *
	 * @return string
	 */
	public static function getDeclaration()
	{
		$version = '1.0';
		$res = '<?xml version="'.$version.'" encoding="'.self::getCharset().'"?>';
		return $res;
	}


	/**
	 * send http header
	 *
	 * @return void
	 */
	public static function sendHttpHeader()
	{
		header('Content-Type: text/xml; charset='.self::getCharset());
	}


	/**
	 * helper method to automatically create cdata section for a given value
	 *
	 * note: assuming all array values are already utf-8 encoded
	 *
	 * @param string $key   Name of the text node
	 * @param string $value Content of the text node
	 * @param object $xml   SimpleXMLElement to add text node to
	 *
	 * @return object
	 */
	private static function _processValue($key, $value, $xml)
	{
		$node = null;
		if (!is_string($value) && !is_numeric($value)) {
			// true false null object etc
			if ($value == true) {
				$node = $xml->addChild($key, 1);
			} else {
				$node = $xml->addChild($key, 0);
			}

			return $node;
		}

		$res = htmlentities($value);
		if ($res != $value) {
			// has special character
			// use dom to add a cdata section
			// note: ]]> will be escaped by createCDATASection()
			$node = dom_import_simplexml($xml);
			$owner = $node->ownerDocument;
			$elem = $owner->createElement($key);
			$cdata = $owner->createCDATASection($value);
			$elem->appendChild($cdata);
			$node->appendChild($elem);
			$node = simplexml_import_dom($elem);
		} else {
			$node = $xml->addChild($key, $value);
		}

		return $node;
	}


	/**
	 * escape ']]>' in a CDATA section
	 *
	 * a CDATA section cannot contain the string ']]>', use multiple CDATA
	 * sections by splitting each occurrence just before the '>'
	 * libxml error: Sequence ']]>' not allowed in content
	 *
	 * @param  string $input The input string
	 * @return string
	 * @see XMLAPI class
	 */
	public static function escapeCdata($input)
	{
		$res = str_replace(']]>', ']]]]><![CDATA[>', $input);

		return $res;
	}
}
