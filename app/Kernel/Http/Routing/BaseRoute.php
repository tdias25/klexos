<?php
declare(strict_types=1);

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
    * @var array
    */
    private $uriMatchTypes = [
        '[i]'  => '[0-9]+',
        '[a]'  => '[0-9A-Za-z]+',
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

    /**
     * @return array
     */
    private function getUriMatchTypes(): array
    {
        return $this->uriMatchTypes;
    }

    /**
     * @return array
     */
    private function getAcceptedMethods(): array
    {
        return $this->acceptedMethods;
    }

    /**
     * @param string
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string
     */
    public function setMethod(string $method): self
    {
        if (!in_array(strtoupper($method), $this->getAcceptedMethods())) {
            throw new \InvalidArgumentException("{$method} is not a valid method");
        }

        $this->method = $method;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    
    /**
     * @param string
     */
    public function setUri(string $uri): self
    {
        $this->uri = $this->filterUri($uri);
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

    /**
     *
     */
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

        if (is_string($handler)) {
            if (!preg_match('~[\D][\w]+\@[\D][\w]+~', $handler)) {
                throw new \InvalidArgumentException('handler is not a valid controller@action string');
            }
        }
   
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

    /**
     * @param string
     */
    public function filterUri(string $uri): string
    {
        foreach ($this->getUriMatchTypes() as $key => $pattern) {
            $uri = str_replace($key, $pattern, $uri);
        }

        return $uri;
    }
}
