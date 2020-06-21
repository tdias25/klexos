<?php

namespace App\Kernel\Http\Messages;

interface RequestInterface
{
    public function getUri(): string;
    public function getMethod(): string;

}