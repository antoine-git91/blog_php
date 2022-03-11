<?php

namespace App\Entity;


use Core\Entity\Entity;


class PostEntity extends Entity {

    public function getUrl()
    {
        return "index.php?p=post.single&id=" . $this->id;
    }

    public function getUrlDelete()
    {
        return "index.php?p=delete_post&id=" . $this->id;
    }

/*

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