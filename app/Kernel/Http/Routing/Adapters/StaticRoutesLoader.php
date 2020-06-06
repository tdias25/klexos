<?php

namespace App\Kernel\Http\Routing\Adapters;

use App\Kernel\Http\Routing\Facade\RouteFactory as Route;
use App\Kernel\Http\Routing\Adapters\RoutesLoaderInterface;

class StaticRoutesLoader implements RoutesLoaderInterface
{
    private $routesFile;
    private $routes;

    function __construct($routesFile)
    {   
        $this->setRoutesFile($routesFile);
        $this->loadRoutes();
    }

    public function setRoutesFile(string $routesFile)
    {
        $routesFile = \base_path($routesFile);

        if(!file_exists($routesFile)) {
            throw new \InvalidArgumentException('routes file could not be found!');
        }

        $this->routesFiles = $routesFile;
    }

    public function getRoutesFile()
    {
        return $this->routesFiles;
    }

    public function loadRoutes()
    {   
        require $this->getRoutesFile();
        $this->routes = Route::getCollection();

    }

    public function getCollection(): RouteCollection
    {
        return $this->routes;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

}