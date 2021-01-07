<?php

namespace App\Kernel\Http\Routing\Loaders;

use App\Kernel\Http\Routing\AbstractRoute;
use App\Kernel\Http\Routing\Contracts\RoutesLoaderContract;

class ArrayRoutesLoader implements RoutesLoaderContract
{
    /**
     * @var array<AbstractRoute>
     */
    private array $routes = [];
    private array $arrayRoutes = [];

    public function __construct(array $arrayRoutes)
    {
    }

    public function getRoutes(): array
    {
        return [];
    }
}