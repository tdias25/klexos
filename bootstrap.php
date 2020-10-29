<?php

require 'vendor/autoload.php';

use App\Kernel\Http\Request;
use App\Kernel\Http\Routing\Route;
use App\Kernel\Http\Routing\Router;
use App\Kernel\Http\Routing\Loaders\ArrayRoutesLoader;

$ArrayRoutesLoader = new ArrayRoutesLoader('routes/sample_array.php');

$Route = new Route;
$Route->setMethod('GET');
$Route->setUri('/');
$Route->setName('home');
$Route->setHandler(function () {
    echo 'Howdy, World';
});

$Request = new Request;

$Router = new Router;

$Routr->loadRoutes($ArrayRoutesLoader->getRoutesCollection());
$Routr->loadRoutes($StaticRoutesLoader->getRoutesCollection());

$Router->addRoute($Route);

try {
    $Router->match($Request);
} catch (\Throwable $e) {
    echo $e->getMessage();
}