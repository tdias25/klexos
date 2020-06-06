<?php

namespace App\Kernel\Http\Routing\Collections;

interface RouteCollectionInterface
{
    public function getCollection();
    public function toArray();
}