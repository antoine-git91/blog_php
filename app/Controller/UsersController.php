<?php

namespace App\Controller;

use \App;
use Core\Controller\Controller;

class UsersController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Post');
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

    public function index(){
        $users = $this->User->all();
        $data = compact('users');
        $this->render('/public/users/index', $data);
    }

    public function single(){
        $user = $this->User->find($_GET['id']);
        $posts_user = $this->Post->findByUser($_GET['id']);
        $data = compact('user', 'posts_user');
        $this->render('/public/users/single', $data);
    }

}