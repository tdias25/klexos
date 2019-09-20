<?php
require 'vendor/autoload.php';
// require 'routes/routes.php';

use App\Helpers\Request;
use App\Helpers\Router;

$router = new Router(new Request());
$router->map('/user/[i:id]', 'UserController@show');
$router->match();

print_r($router->match());