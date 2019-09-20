<?php

// namespace App\Helpers;

class fileHelper {

	static function getExtension($file) {
		return end(explode('.', $file));
	}
}