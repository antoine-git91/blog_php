<?php

use App\Controller\CategoriesController;
use App\Controller\PostController;
use App\Controller\UsersController;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p='posts.index';
}

$p = explode('.', $p);
if($p[0] === "admin"){
    $controller = '\App\Controller\Admin\\' . ucfirst($p[1]) . 'Controller';
    $action = $p[2];
} else {
    $controller = '\App\Controller\\' . ucfirst($p[0]) . 'Controller';
    $action = $p[1];
}
$controller = new $controller();
$controller->$action();

