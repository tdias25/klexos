<?php

namespace App\Helpers;

use App\Interfaces\Request\RequestInterface;

class Request implements RequestInterface {
		
	private static $params;
	private static $params_post;
	private static $params_get;

	function __construct() {	
		self::setParams();
	}

	function setParams() {

		self::$params = $_REQUEST;
		self::$params_post = $_POST;
		self::$params_get = $_GET;
	}

	function input($name) {
		return self::$params[$name];
	}

	function post($name) {
		return self::$params_post[$name];
	}

	function get($name) {
		return @self::$params_get[$name];
	}

	function merge($name, $value) {
		self::$params[$name] = $value;
	}
}