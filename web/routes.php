<?php

$router->on('get', '/users/{id}', function(){
    return view('users/show');
}, ['namespace' => 'App\Users' ]);