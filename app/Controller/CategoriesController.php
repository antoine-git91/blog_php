<?php

namespace App\Controller;

use \App;
use Core\Controller\Controller;

class CategoriesController extends AppController
{

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $categories = $this->Category->all();
        $data = compact('categories');
        $this->render('/public/categories/index', $data);
    }

}