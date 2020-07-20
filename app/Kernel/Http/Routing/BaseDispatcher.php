<?php

namespace App\Kernel\Http\Routing;

abstract class BaseDispatcher
{

    public function handle(BaseRoute $route): void
    {
        $handler = $route->getHandler();

        if (\is_string($route->getHandler())) {
            list($controller, $method) = explode('@', $handler);
        }

        if (is_callable($handler)) {
            $handler();
        }
    }
}