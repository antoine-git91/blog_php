<?php

namespace App\Controller\Admin;

use \App;

class CategoryController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index()
    {
        $categories = $this->Category->all();
        $data = compact('categories');

        $this->render('admin.categories.index', $data);
    }

    public function create()
    {
        $app = App::getInstance();

        if(!empty($_POST)){
            $result = $this->Category->create(
                [
                    'name' => $_POST['name']
                ]
            );
            if($result){
                $new_post = $app->getDatabase()->lastInsertId();
                header('Location: index.php?p=admin.categories.edit&id=' . $new_post);
            }
        }

        $this->render('admin.categories.create');
    }

    public function edit()
    {
        if(!empty($_POST)):
            $result = $this->Category->update(
                $_GET['id'],
                [
                    'name' => $_POST['name'],
                ]
            );
            if($result):
                ?>
                <div class="alert alert-success mt-3" role="alert">
                    <p>La categorie a bien été modifiée</p>
                </div>
            <?php endif;
        endif;

        $category = $this->Category->find($_GET['id']);
        $data = compact('category');
        $this->render('admin.categories.edit', $data);
    }

    public function delete()
    {
        if(!empty($_POST)){
            $result = $this->Category->delete($_POST['id']);
            if($result){
                header('Location: index.php?p=admin.categories');
            }
        }
    }

}