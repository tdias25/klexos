<?php

require 'bootstrap.php';

use App\Kernel\Http\Request;
use App\Kernel\Http\Routing\Route;
use App\Kernel\Http\Routing\Router;

$Route = new Route;
$Route->setMethod('GET');
$Route->setUri('/klexos/');
$Route->setName('home');
$Route->setHandler(function () {
    echo phpinfo();
});

$Request = new Request;
$Router = new Router;
$Router->addRoute($Route);

try {
    $Router->match($Request);
} catch (\Exception $e) {
    echo $e->getCode();
}
