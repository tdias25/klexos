<?php

namespace App\Kernel\Http\Routing\Loaders;

use App\Kernel\Http\Routing\Contracts\RoutesLoaderContract;

class ArrayRoutesLoader implements RoutesLoaderContract
{
    /**
     * @var array<BaseRoute>
     */
    private $routes = [];

    public function __construct(string $file)
    {
        $this->loadRoutes($file);
    }

    public function loadRoutes(string $file): void
    {
        $this->routes = require base_path($file);
    }

    public function getRoutes(): RoutesCollection
    {
        // return $this->routes;
        return new RoutesCollection($this->routes);
    }
}