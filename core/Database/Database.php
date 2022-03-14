<?php

namespace Core\Database;

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

    public function query($statement, $class_name = null, $one = false)
    {
        $req = $this->getPdo()->query($statement);

        if(
            str_starts_with($statement, "INSERT") ||
            str_starts_with($statement, "UPDATE") ||
            str_starts_with($statement, "DELETE")
        ){
            return $req;
        }

        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }

        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($statement, $attributes, $class_name = null, $one=false)
    {
        $req = $this->getPdo()->prepare($statement);
        $res = $req->execute($attributes);
        if(
            strpos($statement, "INSERT") === 0 ||
            strpos($statement, "UPDATE") === 0 ||
            strpos($statement, "DELETE") === 0
        ){
            return $res;
        }

        if($class_name === null){
            $req->setFetchMode(PDO::FETCH_OBJ);
        } else {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        }
        if($one){
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }

    public function lastInsertId()
    {
        return $this->getPdo()->lastInsertId();
    }

}