<?php

require 'bootstrap.php';

// require 'app/core/View.php';
// require 'app/interfaces/View/actionBeforeRenderView.php';


// class minifyHTML implements actionBeforeRenderView
// {
	
// 	function filter($string) {
// 		return preg_replace(array('/ {2,}/','/<!--.*?-->|\t|(?:\r?\n[ \t]*)+/s'), array(' ',''), $string);
// 	}
// }

// $View = new View('index');

// // $View->actionBeforeRender(new ChangeName);
// // $View->actionBeforeRender(new minifyHTML);

// echo $View->render();