<?php

namespace App\Kernel\Http\Routing;
use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\Http\Routing\Adapters\RoutesLoaderInterface;

abstract class BaseRouter 
{
    private $routes = [];
    
    public function __construct(?RoutesLoaderInterface $routesLoader)
    {
        $this->routes = array_merge($this->routes, $routesLoader->getCollection());
    }
    
    public function addRoute(BaseRoute $route): self
    {
        $this->routes[] = $route;
        return $this;
    }

    public function dispatch(Route $route): void
    {
        
        $callback = $route->getCallback();

        if( is_string($callback) ) {

            list($controller, $method) = explode('@', $callback);
        }

        if( is_callable($callback) ) {
            $callback($route->getParams());
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
                
                // array_shift($matches);

                $route->setParams($matches[1]);
                $this->dispatch($route);
            }
            
        }
        
        return null;
    }
}