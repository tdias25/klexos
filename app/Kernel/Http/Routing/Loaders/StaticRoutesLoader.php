<?php

namespace App\Kernel\Http\Kernel\Routing\Loaders;

use App\Kernel\Http\Routing\Factories\RouteFactory;

class StaticRoutesLoader implements RoutesLoader
{   
    /**
     * @param array
     */
    private $routeCollection = [];

    public function __construct()
    {
        $this->loadRoutes();
    }

    public function loadRoutes(): void
    {
        require base_path('routes/web.php');
        $this->routeCollection = RouteFactory::getRoutes();
    }

    public function getRoutes(): array
    {
        return $this->routeCollection;
    }
}