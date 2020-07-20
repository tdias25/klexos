<?php

RouteFactory::get('/test', function() {
    echo phpinfo();
});

RouteFactory::get('/', 'TestController@index')->setName('test');