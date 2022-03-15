<?php

namespace App\Controller;

use App;
use Core\Controller\Controller;

class AppController extends Controller
{

    protected $template = 'default';

    public function __construct(){
        $this->view_path = ROOT . '/app/Views/';
    }

    protected function loadModel($model_name)
    {
        $this->$model_name = App::getInstance()->getTable($model_name);
    }

}