<?php
namespace Run;

class Config
{
    public static function get($method, $arguments)
    {
        $path = APP . DS . 'config' . DS . $method . EXT;
        if (file_exists($path)) {
            $array = require $path;

            return $array;
        }
    }

    public static function set()
    {

    }

    public static function __callStatic($method, $arguments)
    {
        return static::get($method, $arguments);
    }
}
