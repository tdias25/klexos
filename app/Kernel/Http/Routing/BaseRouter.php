<?php

namespace App\Kernel\Http\Routing;
use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\Http\Routing\RouterLoader;

abstract class BaseRouter 
{
    private $routes = [];
    
    public function __construct(?RouterLoader $routerLoader)
    {
        $this->routes = array_merge($this->routes, $routerLoader->getCollection());
    }
    
    public function addRoute(BaseRoute $route): self
    {
        $this->routes[] = $route;
    }

    public function runCallback(Route $route)
    {

        $callback = $route->getCallback();

        if( is_string($callback) ) {

            list($controller, $method) = explode('@', $callback);
        }

        if( is_callable($callback) ) {
            $callback();
        }

    }
    
    public function match(BaseRequest $request): ?Route
    {
        foreach($this->routes as $route) {
            
            if( !\in_array($request->getMethod(), $route->getMethod()) ) {
                continue;
            }

            $pattern = sprintf('~^%s$~', $route->getUri());
            
            if( preg_match($pattern, $request->getUri(), $matches) ) {
                
                array_shift($matches);

                $route->setParams($matches);
                $this->runCallback($route);
            }
            
        }
        
        return null;
    }
}