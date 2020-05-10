<?php

namespace App\Kernel\Http\Routing\UriFilters;

interface UriFilterInterface {
    public function filter($uri): string;
}