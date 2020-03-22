<?php

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase {
    
    
    function test_route() {
        
        $Route = new Route;

        $Route
        ->setUri('users/[i:id]')
        ->setMethod(['get', 'post'])
        ->setCallback(function() {
            return 'get user';
        })
        ->setMiddleware([
            App\Http\Middlewares\Auth::class,
            App\Http\Middlewares\Permission::class
        ]);


        $Router = new Router;
        // $Router->handleMiddlewares();
        // $Router->handleCallback();
        $Router->addRoute($Route);

        $Router->watch();
    }
    
}