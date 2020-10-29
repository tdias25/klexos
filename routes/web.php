<?php

return [
    [
        'name' => 'users.index',
        'path' => '/users',
        'middleware' => [
//            \App\Api\Bob\Auth\Action\GetRememberedCustomer::class,
        ],
        'allowed_methods' => ['GET'],
        'validation_rules' => [
//            \App\Http\Request\Validation\UserValidation::class,
        ],
    ]
];