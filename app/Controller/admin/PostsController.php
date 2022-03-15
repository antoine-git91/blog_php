<?php

namespace App\Controller\Admin;

use \App;

class PostsController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
    }

    public function index()
    {
        $posts = $this->Post->getPosts();
        $data = compact('posts');
        $this->render('admin/posts.index', $data);
    }

    public function create()
    {
        $app = App::getInstance();
        $postTable = $this->Post;
        $categories = $this->Category->all();
        if(!empty($_POST)){
            $result = $postTable->create(
                [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category']
                ]
            );
            if($result){
                $new_post = $app->getDatabase()->lastInsertId();
                header('Location: index.php?p=admin.posts.edit&id=' . $new_post);

            }
        }
        $data = compact('categories');
        $this->render('admin.posts.create', $data);
    }

    public function edit()
    {
        $postTable = $this->Post;
        $categories = $this->Category->all();
        if(!empty($_POST)):
            $result = $postTable->update(
                $_GET['id'],
                [
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'category_id' => $_POST['category']
                ]
            );
            if($result):
                ?>
                <div class="alert alert-success mt-3" role="alert">
                    <p>Le post a bien été modifié</p>
                </div>
            <?php endif;
        endif;
        $post = $this->Post->find($_GET['id']);
        $data = compact('categories', 'post');
        $this->render('admin.posts.edit', $data);
    }

    public function delete()
    {
        if(!empty($_POST)){
            $result = $this->Post->delete($_POST['id']);
            if($result){
                header('Location: index.php?p=admin.posts');
            }
        }
    }

}