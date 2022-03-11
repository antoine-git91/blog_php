<?php

namespace App\Table;

use Core\Table\Table;

class PostTable extends Table
{

    /**
    * Récupère tous les posts
     * @return array
     */
    public function getPosts(): array
    {
        return $this->query("
            SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id, c.name AS categorie FROM posts AS p 
                LEFT JOIN users AS u ON p.author_id = u.id 
                LEFT JOIN categories AS c ON p.category_id = c.id
            ORDER BY p.date DESC
        ");
    }

    /**
    * Récupère un post avec l'auteur et la catégorie
     * @return \App\Entity\PostEntity
     * @param $id
     */
    public function find($id): \App\Entity\PostEntity
    {
        return $this->query("
                SELECT p.id, p.title, p.date, p.content, u.lastname, u.firstname, u.id AS u_id, c.name FROM posts AS p 
                    LEFT JOIN categories AS c ON p.category_id = c.id 
                    LEFT JOIN users AS u ON p.author_id = u.id 
                WHERE p.id = :post_id
                ",
            [':post_id'=>$id],
            true
        );
    }

    /**
     * Récupère les posts avec l'auteur avec la catégorie demandée
     * @return array
     * @param $id
     */
    public function findByCategorie($id): array
    {
        return $this->query(
            "
                SELECT p.id, p.title, p.content, p.date, c.name, u.id AS user_id, u.firstname, u.lastname from posts AS p
                    LEFT JOIN categories AS c ON p.category_id = c.id
                    LEFT JOIN users AS u ON p.author_id = u.id
                WHERE c.id = :category_id
                ",
            [':category_id'=>$id]
        );
    }
}