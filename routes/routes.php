<?php

$RouteCollection = new RouteCollection;

$RouteCollection->add(
    (new Route())
    ->setMethod('get')
    ->setUri('users/[i]')
    ->setCallback('UsersController@show')
);  
$RouteCollection->add(
    (new Route())
    ->setMethod('get')
    ->setUri('users/[i]')
    ->setCallback('UsersController@show')
);  

return $RouteCollection;