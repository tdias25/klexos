<?php

use Route;
use App\Kernel\Http\Request;
use PHPUnit\Framework\TestCase;

class RoutingTest extends TestCase
{
    public function testRouteBuilder()
    {
        $ArrayRoutesLoader = ArrayRouterLoader('routes/web.php'); //adapter

        $RouterBuilder = new RouteBuilder;
        $RouterBuilder->uri('users/[aa]')
        ->method(['GET', 'POST'])
        ->callback(function() {
            phpinfo();
        })
        ->middleware([
            'App\Http\Middlewares\Auth'
        ])
        ->name('users.show')
        ->uriFilter(new AAFilter)
        ->buildRoute();
            
        $Request = new Request;

        $Router = new Router($ArrayRoutesLoader);
        $Router->addRoute($Route);
        $Router->addRoute($Route2);
        $Router->addRouteFilter(new FilterRouteRegex());
        $Router->addRouteFilter(new FilterRouteQueryStrings());
        // if the route is matched this methods are called
        // $Router->handleMiddlewares();
        // $Router->handleCallback();
        $Router->match($Request);
    }
    
    public function testStaticRoute()
    {

        $staticRouteLoader = StaticRouterLoader('routes/web.php');
        $Request = new Request;

        $Router = new Router($staticRouteLoader);
        $Router->match($Request);
    }
}
