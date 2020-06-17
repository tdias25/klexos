<?php

use Closure;
use PHPUnit\Framework\TestCase;
use App\Kernel\Http\Routing\Route;

class RouteTest extends TestCase
{

    /**
     * @param Route
     */
    private $route;

    public function setUp(): void
    {
        $this->route = new Route;
    }

    public function testIfRouteNameisSet()
    {
        $this->route->setName('users.index');
        $this->assertEquals($this->route->getName(), 'users.index');
    }

    public function testIfRouteMethodIsSet()
    {
        $this->route->setMethod('post');
        $this->assertEquals($this->route->getMethod(), 'post');
    }
    
    public function testIfUriRouteIsSet()
    {
        $this->route->setMethod('post');
        $this->assertEquals($this->route->getMethod(), 'post');
    }
    
    public function testIfCallbackIsAValidCallable()
    {
        $this->route->setCallback(function() {
            return 1;
        });

        $this->assertInstanceOf(Closure::class, $this->route->getCallback());
    }
}
