<?php

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Routing\DefaultMatchFilter;

class RouteBuilder implements BaseRouteBuilder {

    private $route;

    public function __construct()
    {
        $this->route = new Route;
        $this->route->setMatchFilter(new DefaultUriFilter);
    }

    public function route($route): self
    {
        $this->route->setUri($route);
        return $this;
    }
    
    public function method($method): self
    {
        $this->route->setMethod($method);
        return $this;
    }

    public function callback($callback): self
    {
        $this->route->setCallback($callback);
        return $this;
    }
    
    public function middleware($middleware): self
    {
        $this->route->setMiddleware($middleware);
        return $this;
    }

    public function UriFilter($uriFilter)
    {
        $this->route->setUriFilter($uriFilter);
    }

    public function build()
    {
        return $this->route;
    }
}