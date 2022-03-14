<?php

use Core\Config;
use Core\Database\Database;

class App
{

    public $title = "Mon Premier blog";
    private $db_instance;
    private static $_instance;

    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public function getTable($name)
    {
        $class_name = "\\App\\Table\\" . ucfirst($name) . "Table";
        return new $class_name($this->getDatabase());
    }

    public function getDatabase()
    {
        $config = Config::getInstance(ROOT . "/config/config.php");
        if(is_null($this->db_instance)){
            $this->db_instance = new Database(
                $config->get('db_name'),
                $config->get('db_host'),
                $config->get('db_pass'),
                $config->get('db_user'),
            );
        }
        return $this->db_instance;
    }

    public static function load()
    {
        session_start();
        require ROOT . "/app/Autoloader.php";
        \App\Autoloader::register();
        require ROOT . "/core/Autoloader.php";
        \Core\Autoloader::register();
    }

    public function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        header("Location: index.php?p=404");
    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
    }

/*    private static $title = "Mon Premier blog";

    private static $databse;

    private static $_instance;

    public static function getInstance()
    {
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

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
    }*/
}