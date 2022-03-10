<?php

namespace App;

class Table
{

    protected static $table;

    /* Permet d'appeler une methode type $class->methode au lieu de $class->getMethod()*/
    public function __get($key){
        $method = "get" . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function getAll()
    {
        return App::getDatabase()->query("
            SELECT * FROM " . static::$table,
            get_called_class()
        );
    }

    public static function find($id)
    {
        return App::getDatabase()->prepare("
            SELECT * FROM " . static::$table . "
            WHERE id = :id
            ",
            [":id" => $id],
            get_called_class(),
            true
        );
    }

    public static function query($statement, $attributes = null, $one=false)
    {
        if($attributes){
            return App::getDatabase()->prepare(
                $statement,
                $attributes,
                get_called_class(),
                $one
            );
        } else {
            return App::getDatabase()->query(
                $statement,
                get_called_class(),
                $one
            );
        }
    }
}