<?php

namespace App\Kernel\Http\Routing\Contracts;

interface RoutesLoaderContract
{
    /*
     * @return array<AbstractRoute>
     */
    public function getRoutes(): array;
}