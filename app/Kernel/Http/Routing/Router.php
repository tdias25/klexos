<?php

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\BaseRequest;
use App\Exceptions\MethodNotAllowedException;

class Router
{
	private $routes = [];
	private $methodsAllowed = ['GET', 'POST'];
	private $request;
	private $uri;
	private $basePath = '';
	private $matchTypes = [
		'i'  => '[0-9]++',
		'a'  => '[0-9A-Za-z]++',
		'*'  => '.+?',
	];
	
	public function __construct(BaseRequest $request)
	{
		$this->request = $request;
	}

	/**
	 * define a base URI (it's recommended if the router is called from a subdirectory)
	 * 
	 * @param string
	 */
	public function setBasePath($basePath): self
	{
		$this->basePath = '/' . $basePath . '/';
		return $this;
	}

	public function getBasePath(): string
	{
		return $this->basePath;
	}

	public function getMethodsAllowed(): array
	{
		return $this->methodsAllowed;
	}
	
	public function on($method, $route, $callback): void
	{
		$this->setRoute($route, $method, $callback);
	}
	
	function setRoute($route, $method, $callback): self
	{
		if(!\in_array($method, $this->methodsAllowed)) {
			throw new MethodNotAllowedException('Method not allowed');
		}
		
		$method = strtoupper($method);
		
		$this->routes[] = [
			'route' => $this->handleRouteUri($route),
			'method' => $method,
			'callback' => $callback,
			'params' => []
		];
		
		return $this;
	}
	
	public function handleRouteUri ($route): string
	{
		$route = $this->handleBasePath($route);
		$route = $this->filterRouteRegex($route);	

		return $route;
	}
	
	public function filterRouteRegex($route): string
	{	
		foreach($this->matchTypes as $matchType => $pattern) {
			$route = str_replace("[$matchType]", "($pattern)", $route);
		}
		
		return $route;
	}

	public function handleBasePath($route): string
	{
		if( !empty($this->getBasePath()) ) {

			if($route != '/') {
				$route = $this->getBasePath() . $route;
			} else {
				$route = $this->getBasePath();
			}

		}
		
		return $route;
	}
	
	public function getRoutes(): array
	{
		return $this->routes;
	}
	
	public function match()
	{	
		foreach($this->routes as $route) {
			
			if($route['method'] != $this->request->getMethod())
			continue;
			
			$routeUri = $route['route'];
			$pattern = sprintf('~^%s$~', $routeUri);
			
			if( preg_match($pattern, $this->request->getUri(), $matches) ) {
				
				array_shift($matches);
				$route['params'] = $matches;

				return $route;
			}
			
		}

		return false;
	}
}