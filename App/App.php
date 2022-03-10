<?php

namespace App;

class App
{
    private const DB_USER = "root";
    private const DB_PASS = "root";
    protected const DB_NAME = "ecf_rattrapage";
    protected const DB_HOST = "localhost:8889";

    private static $title = "Mon Premier blog";

    private static $databse;

    public static function getDatabase()
    {
        if(self::$databse === null){
            self::$databse = new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASS);
        }
        return self::$databse;
    }

    public static function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        header("Location: index.php?p=404");
    }

    public static function getTitle(): string
    {
        return self::$title;
    }

    public static function setTitle($title)
    {
        self::$title = $title . " | " . self::$title;
    }
}