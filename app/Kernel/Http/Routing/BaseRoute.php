<?php

namespace App\Kernel\Http\Routing;

abstract class BaseRoute
{
    /**
    * @var array
    */
    private $acceptedMethods = [
        'POST', 'GET', 'PUT', 'PATCH', 'DELETE', 'OPTIONS', 'HEAD'
    ];

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */

    private $uri;
    /**
     * @var array
     */
    private $arguments = [];

    /**
     * @var string|callable
     */
    private $handler;

    private function getAcceptedMethods(): array
    {
        return $this->acceptedMethods;
    }

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
        if (!in_array(strtoupper($method), $this->getAcceptedMethods())) {
            throw new \InvalidArgumentException("{$method} is not a valid method");
        }

        $this->method = $method;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
    
    /**
     * @param string
     */
    public function setUri(string $uri): self
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param array
     */
    public function setArguments(array $arguments): self
    {
        $this->arguments = $arguments;
        return $this;
    }

    public function getArguments(): array
    {
        return $this->arguments;
    }
    
    /**
     * @param string|callable
     */
    public function setHandler($handler): self
    {
        if (!\is_callable($handler) && !\is_string($handler)) {
            throw new \InvalidArgumentException('handler should be a callable or a controller@method string');
        }

        // if (is_string($handler)) {
        //     $pattern = '[\w]+\@[\w]+';
        //     throw new \InvalidArgumentException('handler is not a valid controller@action string');
        // }
   
        $this->handler = $handler;

        return $this;
    }

    /**
     * @return callable|string
     */
    public function getHandler()
    {
        return $this->handler;
    }
}
