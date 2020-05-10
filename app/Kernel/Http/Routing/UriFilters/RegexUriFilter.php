<?php

namespace App\Kernel\Http\Routing\UriFilters;

use App\Kernel\Http\Routing\UriFilters\UriFilterInterface;

class RegexUriFilter implements UriFilterInterface
{
    private $matchTypes = [
		'i'  => '[0-9]++',
		'a'  => '[0-9A-Za-z]++',
		'*'  => '.+?',
    ];
    
    public function filter($route): string
	{	
		foreach($this->matchTypes as $matchType => $pattern) {
			$route = str_replace("[$matchType]", "($pattern)", $route);
		}
		
		return $route;
	}
}