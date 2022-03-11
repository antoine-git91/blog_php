<?php

namespace Core;

class Config {

    private $settings = [];
    private static $_instance;

    public static function getInstance($file)
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    public function __construct($file)
    {
        $this->settings = require($file);
    }

    /**
    * Permet de récupérer une clé de la config
     * Ex : get("db_name") -> retourne "ecf_rattrape" dans notre cas
     */
    public function get($key)
    {
        // Si la clé n'existe pas on return null
        if(!isset($this->settings[$key])){
            return null;
        }

        return $this->settings[$key];
    }
}