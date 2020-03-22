<?php

require 'vendor/autoload.php';

use App\Kernel\Http\Request;
use App\Kernel\Http\Routing\Router;

$request = new Request;

$router = new Router($request);

// $router->setBasePath('klexos');

$router->on('GET', '/', function() {});
$router->on('GET', 'users/[i]', 'UsersController@show');
$router->on('GET', 'users', function() {
    return 123;
});
$router->on('POST', 'user/store', function() {});

$match = $router->match();

// dump($router->getRoutes());

if($match == true) {
    dump($match);
} else {
    dump($request->getUri());
}