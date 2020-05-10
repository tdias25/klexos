<?php
declare(strict_types=1);

namespace App\Kernel\Http\Routing;

use App\Kernel\Http\Routing\UriFilters\UriFilterInterface;

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
        return $this;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    public function setUriFilter(UriFilterInterface $filter)
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
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setCallback($callback): self
    {
        if (!\is_callable($callback) && !\is_string($callback)) {
            throw new \InvalidArgumentException('Callback should be a Callable or a controller@action string');
        }

        $this->callback = $callback;
        return $this;
    }

    public function setMiddleware($middleware): self
    {
        if (is_array($middleware)) {
            $this->$middlewares = array_merge($this->middlewares);
        }

        if (is_string($middleware)) {
            $this->middlewares[] = $middleware;
        }

        return $this;
    }
}
