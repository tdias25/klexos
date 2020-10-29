<?php
declare(strict_types=1);

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Messages\RequestInterface;
use App\Kernel\Http\Routing\Contracts\RoutesLoaderContract;
use App\Kernel\Http\Routing\Exceptions\RouteNotFoundException;

abstract class AbstractRouter
{
    /**
     * @var array
     */
    private $routesCollection = [];

    /**
     * @param RouteCollection
     */
    public function loadRoutes(RoutesLoaderContract $routesLoader): void
    {
        $this->routesCollection = $routesLoader->getRoutes();
    }

    /**
     * @param AbstractRoute
     */
    public function addRoute(AbstractRoute $route): void
    {
        $this->routesCollection[] = $route;
    }

    /**
     * @return array<AbstractRoute>
     */
    public function getRoutes(): array
    {
        return $this->routesCollection;
    }

    /**
     * @return void
     */
    public function dispatch(AbstractRoute $route): void
    {
        $handler = $route->getHandler();

        if (\is_string($route->getHandler())) {
            list($controller, $method) = explode('@', $handler);
        }

        if (\is_callable($handler)) {
            $handler();
        }
    }

    /**
     * @param RequestInterface
     * @return void
     * @throws RouteNotFoundException
     */
    public function match(RequestInterface $request): void
    {
        foreach ($this->getRoutes() as $route) {

            if ($request->getMethod() !== $route->getMethod()) {
                continue;
            }

            $pattern = sprintf('~^%s$~', $route->getUri());

            if (preg_match_all($pattern, $request->getUri(), $matches)) {
                $route->setArguments($matches[1] ?? []);
                $this->dispatch($route);
                return;
            }
        }

        throw new RouteNotFoundException();
    }
}
