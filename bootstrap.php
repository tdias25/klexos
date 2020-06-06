<?php

require 'vendor/autoload.php';
require 'config.php';

use App\Kernel\Http\Request;
use App\Kernel\Http\Routing\Router;
use App\Kernel\Http\Routing\Adapters\StaticRouteLoader;

// $request = new Request;
// $router = new Router($request);

$staticRouteLoader = new StaticRouteLoader('routes/web.php');
// $arrayRoutesLoader = new ArrayRoutesLoader('routes/array.php');
$Router = new Router($staticRouteLoader);
//     echo '<pre>';
// print_r($routes);