<?php

namespace App\Kernel\Http\Routing;

interface RoutesLoaderInterface
{
    public function getRoutes(): array;
}