<?php

namespace App\Interfaces\Request;

interface RequestInterface {

	public function post($name);
	public function get($name);
	public function input($name);
}

