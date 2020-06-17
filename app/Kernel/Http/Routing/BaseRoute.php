<?php

namespace App\Kernel\Http\Routing;

abstract class BaseRoute
{
    private $method;
    private $name;
    private $uri;
    private $params = [];
    private $callback;
    private $middlewares = [];

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
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
        if (!\is_callable($callback) || !\is_string($callback)) {
            throw new \InvalidArgumentException('callback should be a callable or a controller@method string');
        }

        if(is_string($callback)) {

            $pattern = '[\w]+\@[\w]+';

        }
   
        $this->callback = $callback;

        return $this;
    }

    public function getCallback(): mixed
    {
        return $this->callback;
    }
}
