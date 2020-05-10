<?php

namespace App\Kernel\Http;

abstract class BaseRequest {

	private static $params = [];
	private static $getParams = [];
	private static $postParams = [];
	private static $serverParams = [];
	private $method;
	private $uri;

	public function __construct() 
	{	
		self::setParams();
		$this->setUri();
		$this->setMethod();
	}

	public function setParams(): void
	{
		self::$params =  $_REQUEST;
		self::$getParams = $_GET;
		self::$postParams = $_GET;
		self::$serverParams = $_SERVER;
	}

	public function input($name): mixed
	{
		return self::$params[$name];
	}

	public function post($name): mixed
	{
		return self::$postParams[$name];
	}

	public function get($name): mixed
	{
		return self::$params_get[$name];
	}

	public function merge($name, $value): void
	{
		self::$params[$name] = $value;
	}

	public function setMethod($method = null): void
	{
		$this->method = $method ?? $_SERVER['REQUEST_METHOD'];
	}

	public function getMethod(): string
	{
		return $this->method;
	}

	public function setUri($uri = null): void
	{
		$this->uri = $uri ?? $_SERVER['REQUEST_URI'];
	}

	public function getUri(): string
	{
		return $this->uri;
	}
}

