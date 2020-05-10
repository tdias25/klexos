<?php

namespace App\Kernel\Http\Routing;

interface UriFilter {
    public function filter(): string;
}