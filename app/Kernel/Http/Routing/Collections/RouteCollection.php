<?php

namespace App\Kernel\Http\Routing\Collection;

use App\Kernel\Http\Routing\BaseRoute;
use App\Kernel\Http\Routing\Collections\RouteCollectionInterface;

class RouteCollection extends \ArrayObject implements RouteCollectionInterface
{
    public function offsetSet($index, $value)
    {
        if ($value instanceof BaseRoute) {
            throw new \InvalidArgumentException("Invalid Route Type");
        }

        parent::offsetSet($index, $value);
    }
}
