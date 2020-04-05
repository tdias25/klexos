<?php

use App\Kernel\Http\Request;
use App\Kernel\Http\Routing\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase {
    
    function test_if_matched_route_returns_expected_array() {
        
        $Request = new Request;
        $Request->setUri('users/10');
        $Request->setMethod('GET');

        $Router = new Router($Request);
        $Router->on('GET', 'users/[i]', 'UsersController@show');
        
        $match = $Router->match();
        
        $expected = [
            'route' => 'users/([0-9]++)',
            'method' => 'GET',
            'callback' => 'UsersController@show',
            'params' => [
                10
            ]
        ];

        $this->assertEquals($expected, $match);
    }
    
}