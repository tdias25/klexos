<?php

namespace App\Kernel\Http\Routing\Contracts;

interface RoutesLoaderContract
{
    public function getRoutes(): RoutesCollection;
}