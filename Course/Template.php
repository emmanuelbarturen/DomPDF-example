<?php namespace App;

class Template
{

    public static function render($file, array $data = [])
    {
        ob_start();
        extract($data);
        include '../templates/' . $file . '.php';
        return ob_get_clean();
    }
}