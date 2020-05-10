<?php

use App\Kernel\Http\Routing\Facade\RouteFactory as Route;

Route::get('users/[i:id]', function(){
    echo phpversion();
});

Route::get('users', function(){

    $connectin = DabatabeFactory::create();
    $userModel = new userModel($connectin);

    $getAll = $userModel->getAll();
    
});