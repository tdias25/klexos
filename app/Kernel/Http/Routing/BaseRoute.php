<?php

namespace App\Kernel\Http\Routing;

abstract class BaseRoute 
{
    private $methods = [];
    private $name;
    private $uri;
    private $params = [];
    private $callback;
    private $middlewares = [];

    public function setName(string $name): self
    {
        $this->name = $name;
        return self;
    }

    public function setMethods($methods): self
    {
        if(!\is_array($methods) || !\is_string($methods)) {
            throw InvalidArgumentException('method should be an array or a string');
        }

        if(is_array($methods)) {
            $this->methods = array_merge($methods);
        }

        if(is_string($methods)) {
            $this->methods[] = $methods;
        }

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
        if(!\is_callable($callback) || !\is_string($callback)) {
            throw InvalidArgumentException('callback should be a callable or a controller/method string');
        }
        $this->callback = $callback;

        return self;
    }

    public function setMiddleware($middleware): self
    {
        if(is_array($methods)) {
            $this->methods = array_merge($methods);
        }

        if(is_string($methods)) {
            $this->methods[] = $methods;
        }

        return self;
    }
}