<?php
namespace App\Kernel\Http\Routing\Facade;

use App\Exceptions\MethodNotAllowedException;

class RouteFactory
{
    private $routes;
    private static $allowedMethods = [
        'POST',
        'GET',
        'PATCH',
        'PUT',
        'OPTIONS'
    ];

    public static function __callStatic($method, $args)
    {
        if (!\in_array(\strtoupper($method, self::$allowedMethods))) {
            throw new MethodNotAllowedException('Http method not allowed');
        }
        
        $route = new BaseRoute;
        return $route->setUri($args[0])
            ->setMethod(\strtoupper($method))
            ->setCallback($args[1]);
    }
}
