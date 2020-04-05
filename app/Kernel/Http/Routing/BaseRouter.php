<?php

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\ReflectionResolver;

abstract class BaseRouter 
{
    private $routes = [];
    private $request;
    
    public function __construct(BaseRequest $request)
    {
        $this->request = $request;
    }
    
    public function addRoute(BaseRoute $route): self
    {
        $this->routes[] = $route;
    }

    public function matchHandler(Route $route)
    {

        if(!empty($route->getMiddlewares())) {

        }

        if( is_string($route->getCallback()) ) {

            list($controller, $method) = explode('@', $route->getCallback());

            // $reflectionClass = new ReflectionClass($controller);

        }

        if( is_callable($route->getCallback()) ) {
            return $route->getCallback()();
        }

    }
    
    public function match(): ?Route
    {
        foreach($this->routes as $route) {
            
            if( !\in_array($this->request->getMethod(), $route->getMethods()) ) {
                continue;
            }

            $pattern = sprintf('~^%s$~', $route->getUri());
            
            if( preg_match($pattern, $this->request->getUri(), $matches) ) {
                
                array_shift($matches);

                $route->setParams($matches);
                
                $this->matchHandler($route);
            }
            
        }
        
        return false;
    }
}