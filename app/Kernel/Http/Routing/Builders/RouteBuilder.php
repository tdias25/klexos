<?php

namespace App\Kernel\Http\Routing\Builders;

use App\Kernel\Http\Routing\Route;
use App\Kernel\Http\Routing\UriFilters\RegexUriFilter;

class RouteBuilder  {

    private $route;

    public function __construct()
    {
        $this->route = new Route;
        $this->route->setUriFilter(new RegexUriFilter);
    }

    public function setUri($route): self
    {
        $this->route->setUri($route);
        return $this;
    }
    
    public function setMethod($method): self
    {
        $this->route->setMethod($method);
        return $this;
    }

    public function setCallback($callback): self
    {
        $this->route->setCallback($callback);
        return $this;
    }
    
    public function setMiddleware($middleware): self
    {
        $this->route->setMiddleware($middleware);
        return $this;
    }

    public function setUriFilter($uriFilter)
    {
        $this->route->setUriFilter($uriFilter);
    }

    public function build()
    {
        return $this->route;
    }
}