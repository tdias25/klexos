<?php

use PHPUnit\Framework\TestCase;
use App\Kernel\Http\Request;

class RoutingTest extends TestCase
{
    public function test_route()
    {

        $ArrayRoutesLoader = ArrayRouterLoader('routes/web.php');

        $RouterBuilder = new RouterBuilder;
        $RouterBuilder->withUri('users/[i:id]')
        ->withMethod(['GET', 'POST'])
        ->withCallback(function(){
            phpinfo();
        })
        ->withMiddleware([
            'App\Http\Middlewares\Auth'
        ])
        ->withName('users.show');
            
        $Route2 = new Route;
        $Route2
        ->setUri('orders')
        ->setMethods('POST')
        ->setCallback('OrdersController@create')
        ->setMiddleware([
            App\Http\Middlewares\Auth::class
        ])
        ->setName('orders.post');
            
        $Request = new Request;

        $Router = new Router($Request);
        $Router->addRoute($Route);
        $Router->addRoute($Route2);
        $Router->addRouteFilter(new FilterRouteRegex());
        $Router->addRouteFilter(new FilterRouteQueryStrings());
        $Router->addRouteFilter(new FilterRouteBasePath());
        // if the route is matched this methods are called
        // $Router->handleMiddlewares();
        // $Router->handleCallback();
        $Router->run();



    }
}
