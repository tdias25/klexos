<?php

namespace App\Kernel\Http\Routing\Adapters;

// use App\Kernel\Http\Routing\Collection\RouteCollection;

interface RoutesLoaderInterface
{
    function getCollection();
}