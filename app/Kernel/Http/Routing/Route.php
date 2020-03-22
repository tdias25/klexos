<?php

use App\Interfaces\Routing\RouterInterface;

class Route implements RouterInterface
{
    private $method;
    private $uri;
    private $params = [];
    private $callback;
    private $middlewares = [];

    public function setMethod(): self
    {
    }

    public function setUri(): self
    {
    }

    public function setParams(): self
    {
    }

    public function setCallback(): self
    {
    }

    public function setMiddleware(): self
    {
    }
    
}
