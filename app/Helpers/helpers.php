<?php

function dump($what) {
    echo '<pre>';
    print_r($what);
    exit;
}

function base_path($file = false)
{
    return $file ? APP_ROOT_FOLDER . DIRECTORY_SEPARATOR . $file : APP_ROOT_FOLDER;
}