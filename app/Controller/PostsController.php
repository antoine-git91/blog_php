<?php

namespace App\Controller;

use Core\Controller\Controller;

class PostsController extends AppController
{

    public  function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('User');
    }

    public function index(){
        $posts = $this->Post->getPosts();
        $data = compact('posts');
        $this->render("public.posts.index", $data);
    }

    public function categories(){
        $category = $this->Category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        $posts = $this->Post->findByCategorie($category->id);
        $data = compact('category', 'posts');
        $this->render("public.posts.categorie", $data);
    }

    public function single(){
        $post = $this->Post->find($_GET['id']);
        if($post == false){
            $this->notFound();
        } else {
            $user = $this->User->find($post->u_id);
            $data = compact('post', 'user');
            $this->render("public.posts.single", $data);
        }

    }

}