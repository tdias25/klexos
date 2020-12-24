<?php

namespace App\Kernel\Http\Routing\Loaders;

use App\Kernel\Http\Routing\AbstractRoute;
use App\Kernel\Http\Routing\Contracts\RoutesLoaderContract;

class ArrayRoutesLoader implements RoutesLoaderContract
{
    /**
     * @var array<BaseRoute>
     */
    private $routes = [];
    private array $rawRoutes;

    public function __construct(array $rawRoutes, RouteCollectionInterface $routeCollection)
    {
        $this->makeRouteCollection($rawRoutes);
    }

    public function makeRouteCollection(array $routes): void
    {
        foreach ($routes as $route) {

        }
    }

    public function getRoutes(): RoutesCollection
    {
        // return $this->routes;
        return new RoutesCollection($this->routes);
    }
}