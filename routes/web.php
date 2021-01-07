<?php

return [
    [
        'name' => 'test.home',
        'path' => '/test',
        'middlewares' => [
//            \App\Http\Middlewares\VerifyIfHeaderHasContentType::class
        ],
        'methods' => ['GET'],
        'handler' => '\App\Http\Controllers\TestController@Index'
    ]
];