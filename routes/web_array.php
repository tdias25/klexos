<?php


return [
    [
        'path' => 'index',
        'methods' => ['GET', 'POST']
        'handler' => function() {
            echo phpinfo();
        }
    ]
];