<?php
declare(strict_types=1);

use App\Kernel\Http\Routing\AbstractRoute;
use App\Kernel\Http\Routing\Route;
use \PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    /**
     * @var AbstractRoute
     */
    private $route;

    public function setUp(): void
    {
        $this->route = new Route;
    }

    public function RouteShouldBeAnInstanceOfAbstractRoute(): void
    {
        $this->assertInstanceOf(AbstractRoute::class, $this->route);
    }

    public function RouteNameShouldBeAValidString(): void
    {
        $expected = 'users.index';
        $this->route->setName('users.index');

        $this->assertEquals(
            $this->route->getName(),
            $expected
        );
    }

    public function RouteNameWithNonStringValueShouldThrowAnException(): void
    {
        $this->expectException('TypeError');
        $this->route->setName(new \stdClass);
    }

    public function RouteMethodShouldHaveAValidHttpVerb(): void
    {
        $this->route->setMethod('POST');
        $this->assertEquals($this->route->getMethod(), 'POST');
    }

    public function RouteMethodShouldThrowExceptionWithInvalidHttpVerb(): void
    {
        $this->expectException('InvalidArgumentException');
        $this->route->setMethod('dance');
    }

    public function testPathShouldBeAString(): void
    {
        $this->route->setPath('/users/[i:id]');
        $this->assertEquals($this->route->getPath(), '/users/[i:id]');
    }

    public function testPathShouldThrowAnExceptionWithInvalidPath()
    {
        $this->expectException('TypeError');
        $this->route->setPath(new StdClass);
    }

    public function testHandlerShouldBeAValidCallableOrAValidClassAndMethodString()
    {
        $this->route->setHandler(function () {
        });

        $this->assertInstanceOf(\Closure::class, $this->route->getHandler());

        $this->route->setHandler('DummyController@method');

        $this->assertEquals('DummyController@method', $this->route->getHandler());
    }

    public function testHandlerWithInvalidCallableShouldThrowException()
    {
        $this->route->setHandler(2222);
        $this->expectException('InvalidArgument');
    }

    public function testHandlerWithInvalidStringFormatShouldThrowException()
    {
        $this->expectException('InvalidArgumentException');
        $this->route->setHandler('TestClass@@method');
    }

    public function testArgumentsShouldBeAValidArray()
    {
        $this->route->setArguments([
            'id' => 22,
            'name' => 'dummy'
        ]);

        $expected = [
            'id' => 22,
            'name' => 'dummy'
        ];

        $this->assertSame($this->route->getArguments(), $expected);
    }

    public function RoutePathWithParamsShouldBeReplacedWithRegexPattern()
    {
        $this->route->setPath('users/[i]');
        $expected = 'users/([0-9]+)';

        $this->assertSame($expected, $this->route->getPath());

        $this->route->setPath('users/[a]');
        $expected = 'users/([0-9A-Za-z]+)';

        $this->assertSame($expected, $this->route->getPath());
    }
}
