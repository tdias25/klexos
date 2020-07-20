<?php
namespace App\Kernel\Http\Routing\Factories;

use App\Kernel\Http\Routing\Route;

final class RouteFactory
{
    /**
     * @var array<Route>
     */
    private static $routeCollection = [];

    /**
     * @var array
     */
    private static $allowedMethods = [
        'GET',
        'POST',
        'PUT',
        'PATCH',
        'DELETE'
    ];

    public static function __callStatic($name, $arguments): Route
    {
        $method = strtoupper($name);

        if (!in_array($method, self::$allowedMethods)) {
            throw new InvalidArgumentException('Invalid route method called');
        }

        $Route = new Route;
        $Route->setMethod($method);
        $Route->setUri($arguments[0]);
        $Route->setHandler($arguments[1]);

        self::$routeCollection[] = $Route;

        return $Route;
    }

    public static function getRoutes(): array
    {
        return self::$routeCollection;
    }
}
