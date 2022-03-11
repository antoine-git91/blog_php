<?php

namespace Core\Table;

use Core\Database\Database;

class Table{

    protected $table;
    protected $db_conn;

    public function __construct(Database $db_conn){
        $this->db_conn = $db_conn;
        if(is_null($this->table)){
            $parts = explode("\\", get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name) . "s");
        }
    }

    public function all(){
        return $this->query("SELECT * FROM " . $this->table);
    }

    public function query($statement, $attributes = null, $one=false)
    {
        if($attributes){
            return $this->db_conn->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db_conn->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }

    public function find($id)
    {
        return $this->query(
            "
                SELECT * FROM {$this->table}  
                WHERE id = :id
            ",
            [':id'=>$id],
            true
        );
    }

}