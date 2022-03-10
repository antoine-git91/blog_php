<?php

namespace App;

class Autoloader
{

    static function autoload($class)
    {
        if(str_starts_with($class, __NAMESPACE__ . "\\")){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace("\\", "/", $class);
            $file =  __DIR__ . "/" . $class . ".php";
            require $file;
        }
    }

    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
    }

}