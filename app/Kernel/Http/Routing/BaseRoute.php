<?php
declare(strict_types=1);

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Routing\UriFilter;

abstract class BaseRoute
{
    private $method;
    private $name;
    private $uri;
    private $params = [];
    private $callback;
    private $middlewares = [];
    private $uriFilters = [];

    public function setName(string $name): self
    {
        $this->name = $name;
        return self;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return self;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return self;
    }

    public function filterUri(UriFilter $filter): string
    {
        return $filter->filter($this->uri);
    }

    public function setUriFilter(UriFilter $filter)
    {
        $this->uriFilters[] = $filter;
    }

    public function getUriFilters()
    {
        return $this->uriFilters;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setParams(array $params): self
    {
        $this->params = $params;
        return self;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setCallback($callback): self
    {
        if (!\is_callable($callback) || !\is_string($callback)) {
            throw InvalidArgumentException('callback should be a callable or a controller@method string');
        }

        $this->callback = $callback;
        return self;
    }

    public function setMiddleware($middleware): self
    {
        if (is_array($middleware)) {
            $this->$middlewares = array_merge($this->middlewares);
        }

        if (is_string($middleware)) {
            $this->middlewares[] = $middleware;
        }

        return self;
    }
}
