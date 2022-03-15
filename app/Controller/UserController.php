<?php

namespace App\Controller;

use \App;
use Core\Controller\Controller;

class UserController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Post');
    }

    public function index(){
        $users = $this->User->all();
        $data = compact('users');
        $this->render('/public/authors/index', $data);
    }

    public function single(){
        $user = $this->User->find($_GET['id']);
        $posts_user = $this->Post->findByUser($_GET['id']);
        $data = compact('user', 'posts_user');
        $this->render('/public/authors/single', $data);
    }

}