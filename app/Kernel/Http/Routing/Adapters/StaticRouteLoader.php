<?php
use App\Kernel\Http\Routing\Facade\RouteFactory as Route;

class StaticRouteLoader implements RouteLoader
{
    private $routesFile;
    private $routes;

    function __construct($routesFile)
    {   
        $this->setRoutesFile($routesFile);
        $this->loadRoutes();
    }

    public function setRoutesFile(string $file): self
    {
        $file = base_path($file);

        if(!file_exists($file)) {
            throw new \InvalidArgumentException('routes file could not be found!');
        }
    }

    public function loadRoutes()
    {
        require_once $this->file;
        $this->routes = Route::collection();

    }

    public function getColletion(): RouteCollection
    {
        return $this->routes;
    }

}