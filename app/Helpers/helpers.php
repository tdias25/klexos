<?php

function dump($what): void
{
    echo '<pre>';
    var_dump($what);
    exit;
}

function base_path(string $file = null): string
{
    return dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . $file;
}