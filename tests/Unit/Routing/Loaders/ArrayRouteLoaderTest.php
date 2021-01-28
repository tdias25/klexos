<?php
declare(strict_types=1);

namespace Tests\Unit\Routing\Loaders;

use App\Kernel\Http\Routing\AbstractRoute;
use App\Kernel\Http\Routing\Contracts\RoutesLoaderContract;
use App\Kernel\Http\Routing\Loaders\ArrayRoutesLoader;
use PHPUnit\Framework\TestCase;

class ArrayRouteLoaderTest extends TestCase
{
    private array $sampleArrayRoutes;

    public function setUp(): void
    {
        $this->sampleArrayRoutes = [
            [
                'path' => '/test1',
                'methods' => ['POST'],
                'handler' => 'Class1@method1',
                'middlewares' => []
            ],
            [
                'path' => '/test2',
                'methods' => ['POST'],
                'handler' => 'Class2@method2',
                'middlewares' => []
            ]
        ];
    }

    public function testArrayRoutesLoaderShouldBeAnInstanceOfRoutesLoader()
    {
        $arrayRoutesLoader = new ArrayRoutesLoader(
            $this->sampleArrayRoutes
        );

        $this->assertInstanceOf(RoutesLoaderContract::class, $arrayRoutesLoader);
    }

    public function testGetRoutesShouldReturnAValidRouteArrayCollection()
    {
        $arrayRoutesLoader = new ArrayRoutesLoader(
            $this->sampleArrayRoutes
        );

        $routesFromArray = $arrayRoutesLoader->getRoutes();

        foreach ($routesFromArray as $key => $arrayRoute) {

            $this->assertInstanceOf(AbstractRoute::class, $arrayRoute);

            $this->assertSame($this->sampleArrayRoutes[$key]['path'], $arrayRoute->getPath());
            $this->assertSame($this->sampleArrayRoutes[$key]['methods'], $arrayRoute->getMethods());
            $this->assertSame($this->sampleArrayRoutes[$key]['handler'], $arrayRoute->getHandler());
            $this->assertSame($this->sampleArrayRoutes[$key]['middlewares'], $arrayRoute->getMiddlewares());
        }
    }

    public function testArrayRouteWithInvalidMandatoryParamWillThrowException()
    {
        $this->expectException('InvalidArrayRouteException');

        $arrayRoutes = [[
            'path' => '',
            'methods' => ['POST'],
            'handler' => 'UserController@index',
            'middlewares' => []
        ]];

        $arrayRoutesLoader = new ArrayRoutesLoader($arrayRoutes);
        $arrayRoutesLoader->getRoutes();
    }

}
