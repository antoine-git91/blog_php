<?php

namespace App\Controller\Admin;

use \App;

class UserController extends AppController
{

    public function  __construct()
    {
        parent::__construct();
        $this->loadModel('User');
    }

    public function dashboard()
    {
        $user = $this->User->find($_GET['id']);
        $data = compact('user');
        $this->render('admin.users.dashboard', $data);
    }

    public function login(){
        $noAuth = false;
        if(!empty($_POST)){
            $auth = new \Core\Auth\DBAuth(App::getInstance()->getDatabase());
            if($auth->login($_POST['email'], $_POST['password'])){
                header("Location: index.php?p=admin.posts");
            } else {
                $noAuth = true;
            }
        }
        $data = compact('noAuth');
        $this->render('public.login', $data);
    }

    public function index()
    {
        $users = $this->User->all();
        $data = compact('users');
        $this->render('admin.users.index', $data);
    }

    public function create()
    {
        $app = App::getInstance();
        if(!empty($_POST)):
            $result = $this->User->create(
                [
                    'lastname' => $_POST['lastname'],
                    'firstname' => $_POST['firstname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'job' => $_POST['job'],
                    'company' => $_POST['company'],
                    'city' => $_POST['city'],
                    'address' => $_POST['address'],
                    'country' => $_POST['country'],
                ]
            );
            if($result):
                $new_user = $app->getDatabase()->lastInsertId();
                header('Location: index.php?p=admin.users.edit&id=' . $new_user);
            endif;
        endif;

        $this->render('admin.users.create');
    }

    public function edit()
    {
        $user = $this->User->find($_GET['id']);
        if(!empty($_POST)):
            $result = $this->User->update(
                $_GET['id'],
                [
                    'lastname' => $_POST['lastname'],
                    'firstname' => $_POST['firstname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'job' => $_POST['job'],
                    'company' => $_POST['company'],
                    'city' => $_POST['city'],
                    'country' => $_POST['country'],
                ]
            );
            if($result):
                ?>
                <div class="alert alert-success mt-3" role="alert">
                    <p>L'utilisateur a bien été modifié</p>
                </div>
            <?php endif;
        endif;

        $data = compact('user');
        $this->render('admin.users.edit', $data);
    }

    public function delete()
    {
        var_dump($_POST);
        if(!empty($_POST)){
            $result = $this->User->delete($_POST['id']);
            var_dump($result);
            if($result){
                header('Location: index.php?p=admin.users');
            }
        }
    }

}