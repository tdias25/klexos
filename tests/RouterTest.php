<?php

require '../vendor/autoload.php';

class RouterTest extends PHPUnit_Framework_TestCase {
    
    function test_if_matched_route_returns_expected_array() {
        
        $route = new Route;
        $route->setMethod('');
    }
    
}