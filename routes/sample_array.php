<?php

return [
    [
        'path' => '/',
        'methods' => ['GET', 'POST'],
        'handler' => function() {
            echo phpinfo();
        },
        'name' => 'home'
    ],
    [
        'path' => '/hello',
        'methods' => 'GET',
        'handler' => function() {
            echo 'Howdy, World!';
        },
        'name' => 'howdy'
    ]
];