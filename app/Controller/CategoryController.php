<?php

namespace App\Controller;

use \App;
use Core\Controller\Controller;

class CategoryController extends AppController
{

    public function index(){
        $app = App::getInstance();
        $categories = $app->getTable('Category')->all();
        $data = compact('categories');
        $this->render('/public/categories/index', $data);
    }

}