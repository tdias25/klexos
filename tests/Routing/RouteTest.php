<?php

use PHPUnit\Framework\TestCase;
use App\Kernel\Http\Routing\Route;
use App\Kernel\Http\Routing\BaseRoute;

class RouteTest extends TestCase
{
    /**
     * @var Route
     */
    private $route;

    public function setUp(): void
    {
        $this->route = new Route;
    }

    public function test_if_route_is_instace_of_base_route()
    {
        $this->assertInstanceOf(BaseRoute::class, $this->route);
    }

    public function test_if_route_name_is_a_valid_string()
    {
        $this->route->setName('users.index');
        $this->assertEquals($this->route->getName(), 'users.index');
    }
    
    public function test_if_route_name_is_not_a_valid_string()
    {
        $this->expectException('TypeError');
        $this->route->setName(new stdClass);
    }

    public function test_if_method_is_a_valid_http_verb()
    {
        $this->route->setMethod('post');
        $this->assertEquals($this->route->getMethod(), 'post');
    }
    
    public function test_if_method_is_not_a_valid_http_verb()
    {
        $this->expectException('InvalidArgumentException');
        $this->route->setMethod('dance');
    }
    
    public function test_if_route_uri_is_valid()
    {
        $this->route->setUri('/users/[i:id]');
        $this->assertEquals($this->route->getUri(), '/users/[i:id]');
    }
    
    public function test_if_route_uri_is_not_valid()
    {
        $this->expectException('TypeError');
        $this->route->setUri(new StdClass);
    }
    
    public function test_if_handler_is_a_valid_callable()
    {
        $this->route->setHandler(function () {
            return 1;
        });
        $this->assertInstanceOf('Closure', $this->route->getHandler());
    }
    
    public function test_if_handler_is_a_valid_controller_method_string()
    {
        $this->route->setHandler('DummyController@method');
        $this->assertEquals('DummyController@method', $this->route->getHandler());
    }

    public function test_if_handler_is_not_a_valid_controller_method_string()
    {
        $this->expectException('InvalidArgumentException');
        $this->route->setHandler('22DummyController@22method');
    }
    
    public function test_route_arguments()
    {
        $this->route->setArguments([
            'id' => 22,
            'name' => 'dummy'
        ]);

        $expected = [
            'id' => 22,
            'name' => 'dummy'
        ];

        $this->assertEquals($this->route->getArguments(), $expected);
    }
}
