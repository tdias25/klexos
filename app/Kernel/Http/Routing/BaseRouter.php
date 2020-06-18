<?php

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\ReflectionResolver;

abstract class BaseRouter
{
    /**
     * @var array
     */
    private $routesCollection = [];

    /**
     * @var RequestInterface
     */
    private $request;
    
    public function __construct(?RoutesLoaderInterface $routesLoader)
    {
        if ($routesLoader) {
            $this->routes = array_merge($this->getRoutes(), $routesLoader->getRoutes());
        }
    }
    
    /**
     * @param BaseRoute
     */
    public function addRoute(BaseRoute $route): self
    {
        $this->routesCollection[] = $route;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routesCollection;
    }

    /**
     * @return void
     */
    public function dispatch(BaseRoute $route)
    {
        $handler = $route->getHandler();

        if (\is_string($route->getHandler())) {
            list($controller, $method) = explode('@', $handler);

            // $reflectionClass = new ReflectionClass($controller);
        }

        if (is_callable($handler)) {
            $handler();
        }
    }
    
    /**
     * @param RequestInterface
     */
    public function match(RequestInterface $request): ?Route
    {
        foreach ($this->getRoutes() as $route) {
           
            if (!\in_array($this->request->getMethod(), $route->getMethod())) {
                continue;
            }

            $pattern = sprintf('~^%s$~', $route->getUri());
            
            if (preg_match($pattern, $this->request->getUri(), $matches)) {
                
                $route->setArguments($matches[1]);
                $this->dispatch($route);
            }
        }
        
        return null;
    }
}
