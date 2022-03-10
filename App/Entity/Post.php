<?php

namespace App\Entity;


use App\App;
use App\Table;
use \PDO;

class Post extends Table {

    protected static $table="posts";

    public function getUrl()
    {
        return "index.php?p=post&id=" . $this->id;
    }

    public function getUrlDelete()
    {
        return "index.php?p=delete_post&id=" . $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public static function getPosts(): array
    {
        return self::query("
            SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id, c.name AS categorie FROM posts AS p 
                LEFT JOIN users AS u ON p.author_id = u.id 
                LEFT JOIN categories AS c ON p.category_id = c.id
            ORDER BY p.date DESC"
        );
    }

    public static function findByCategorie($categorie_id)
    {
        return self::query("
            SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id, c.name AS categorie FROM posts AS p 
                LEFT JOIN users AS u ON p.author_id = u.id 
                LEFT JOIN categories AS c ON p.category_id = c.id
            WHERE p.category_id = :category_id
           ",
            [':category_id'=>$categorie_id]
        );
    }

    public static function find($id)
    {
        return self::query("
            SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id, c.name FROM posts AS p 
                LEFT JOIN categories AS c ON p.category_id = c.id 
                LEFT JOIN users AS u ON p.author_id = u.id 
            WHERE p.id = :post_id
            ",
            [':post_id'=>$id],
            true
        );
    }

    /*public function addPost($post) :void
    {
        if(isset($_POST['title']) && $_POST['author_id'] && $_POST['content'] ) {
            $new_post = self::initialize()->prepare("INSERT INTO posts(title,date,author_id,content) VALUES(:title,:date_post,:author_id, :content)");
            $new_post->execute(array(
                ':title' => htmlspecialchars($post['title']),
                ':date_post' => date('Y-m-d h:m:s'),
                ':author_id' => htmlspecialchars($post['author_id']),
                ':content' => htmlspecialchars($post['content']),
            ));
        }
    }

    public function deletePost($id) :void
    {
        if($_POST){
            $delete_post = self::initialize()->prepare('DELETE FROM posts WHERE posts.id = :id');
            $delete_post->execute(array(
                ':id'=>$id
            ));
            header('Location: http://localhost:8888/ecf_php/public/index.php');
            exit;
        }
    }*/

}