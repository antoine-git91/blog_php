<?php

namespace App;

use \PDO;

class Database{

    private $dbname;
    private $host;
    private $user;
    private  $pass;
    private $pdo;

    public function __construct($dbname, $host="localhost:8889", $user="root", $pass="root")
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
    }

    private function getPdo(): \PDO
    {
        if($this->pdo === null){
            $this->pdo = new \PDO("mysql:host=" . $this->host . ";dbname=". $this->dbname .";charset=utf8mb4", $this->user, $this->pass);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    public function query($statement, $class_name, $one=false)
    {
        $req = $this->getPdo()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $class_name, $one=false)
    {
        $query_post = $this->getPdo()->prepare($statement);
        $query_post->execute($attributes);
        $query_post->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one){
            $data = $query_post->fetch();
        } else {
            $data = $query_post->fetchAll();
        }

        return $data;
    }
//"SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id FROM posts AS p LEFT JOIN users AS u ON p.author_id = u.id WHERE p.id = :post_id"
}