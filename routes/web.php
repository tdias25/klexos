<?php

return [
    [
        'name' => 'test.home',
        'path' => '/test',
        'middlewares' => [
//            \App\Http\Middlewares\VerifyIfHeaderHasContentType::class
        ],
        'allowed_methods' => ['GET'],
        'validation_rules' => [
//            \App\Http\Request\Validation\TestValidation::class,
        ],
        'handler' => '\App\Http\Controllers\TestController@Index'
    ]
];