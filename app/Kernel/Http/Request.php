<?php

namespace App\Kernel\Http;
use App\Kernel\Http\Messages\RequestInterface;

class Request implements RequestInterface
{
    /**
     * @return string
     */
    public function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
