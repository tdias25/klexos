<?php
declare(strict_types=1);

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Messages\RequestInterface;
use App\Kernel\Http\Routing\RoutesLoaderInterface;
use App\Kernel\Http\Exceptions\RouteNotFoundException;

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
    
    /**
     * @param RouteCollection
     */
    public function loadRoutes(RoutesLoader $routesLoader): void
    {
        $this->routesCollection = array_merge(
            $this->getRoutes(),
            $routesLoader->getRoutes()
        );
    }

    /**
     * @param BaseRoute
     */
    public function addRoute(BaseRoute $route): void
    {
        $this->routesCollection[] = $route;
    }

    /**
     * @return array<BaseRoute>
     */
    public function getRoutes(): array
    {
        return $this->routesCollection;
    }

    /**
     * @return void
     */
    public function dispatch(BaseRoute $route): void
    {   
        $handler = $route->getHandler();

        if (\is_string($route->getHandler())) {
            list($controller, $method) = explode('@', $handler);
        }

        if (is_callable($handler)) {
            $handler();
        }
    }
    
    /**
     * @param RequestInterface
     * @throws RouteNotFoundException
     */
    public function match(RequestInterface $request): Route
    {
        foreach ($this->getRoutes() as $route) {
            if ($request->getMethod() !== $route->getMethod()) {
                continue;
            }

            $pattern = sprintf('~^%s$~', $route->getUri());
            
            if (preg_match_all($pattern, $request->getUri(), $matches)) {
                $route->setArguments($matches[1] ?? []);
                
                $this->dispatch($route);
            }
        }

        throw new RouteNotFoundException('Route not Found', 404);
    }
}
