<?php
namespace App\Kernel\Http\Routing\Facade;

use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\Http\Routing\Builders\RouteBuilder;
use App\Exceptions\MethodNotAllowedException;

class RouteFactory
{
    private static $routes;
    private static $allowedMethods = [
        'POST',
        'GET',
        'PATCH',
        'PUT',
        'OPTIONS'
    ];

    public static function __callStatic($method, $args)
    {
        if (!\in_array(\strtoupper($method), self::$allowedMethods)) {
            throw new MethodNotAllowedException('Http method not allowed');
        }

        $route = new RouteBuilder;
        self::$routes[] = $route;

        return $route->setUri($args[0])
            ->setMethod(\strtoupper($method))
            ->setCallback($args[1]);
    }

    public static function collection()
    {
        return self::$routes;
    }
}
