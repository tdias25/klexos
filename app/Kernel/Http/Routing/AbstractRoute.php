<?php
declare(strict_types=1);

namespace App\Kernel\Http\Routing;

abstract class AbstractRoute
{
    /**
     * @var array
     */
    const VALID_METHODS = [
        'POST', 'GET', 'PUT', 'PATCH', 'DELETE', 'OPTIONS', 'HEAD'
    ];

    /**
     * @var array
     */
    const URI_MATCH_TYPES = [
        '[i]' => '([0-9]+)',
        '[a]' => '([0-9A-Za-z]+)',
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
        return self::URI_MATCH_TYPES;
    }

    /**
     * @return array
     */
    private function getAcceptedMethods(): array
    {
        return self::VALID_METHODS;
    }

    /**
     * @param string
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
     * @return void
     */
    public function setMethod(string $method): void
    {
        if (!in_array(strtoupper($method), $this->getAcceptedMethods())) {
            throw new \InvalidArgumentException("{$method} is not a valid method");
        }

        $this->method = strtoupper($method);
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
    public function setUri(string $uri): void
    {
        $this->uri = $this->filterUri($uri);
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
    public function setArguments(array $arguments): void
    {
        $this->arguments = $arguments;
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
    public function setHandler($handler): void
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
