<?php

namespace App\Helpers;

class Router {
	
	private $router_params;
	private $routes = array();
	private $path;
	private $current_url;

	function __construct(Request $request) {
		$this->init($request);
	}

	function init($request) {

		$this->uri = $request->get('route');
		$params = explode('/', $request->get('route'));
	}

	function routes() {

		// $routes = require
	}

	function getParams() {
		return $this->router_params;
	}

	function map($route, $method) {
		$this->routes[] = $path;
	}


	function match() {

		foreach ($this->routes as $key => $routes) {
				// if($routes['route'] == $)
		}

	}	
}