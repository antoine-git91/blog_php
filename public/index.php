<?php

use App\Controller\CategoryController;
use App\Controller\PostController;
use App\Controller\UserController;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p='home';
}


// Home
if($p === 'home'){
    $controller = new PostController();
    $controller->index();
}
// posts
elseif ($p === "post.single"){
    $controller = new PostController();
    $controller->single();

} elseif ($p === "posts.category"){
    $controller = new PostController();
    $controller->categories();
}
// Categories
elseif ($p === "categories"){
    $controller = new CategoryController();
    $controller->index();
}
// Authors
elseif ($p === "authors"){
    $controller = new UserController();
    $controller->index();
}
elseif ($p === "user.single"){
    $controller = new UserController();
    $controller->single();
}
// login
elseif ($p === "login"){
    $controller = new \App\Controller\Admin\UserController();
    $controller->login();
}

//ADMIN -----------------------
// Posts
// - index
elseif ($p === "admin.posts"){
    $controller = new \App\Controller\Admin\PostController();
    $controller->index();
}
// - posts par catégories
elseif ($p === "admin.posts.category"){
    $controller = new \App\Controller\Admin\PostController();
    $controller->index();
}
// - édition
elseif ($p === "admin.posts.edit"){
    $controller = new \App\Controller\Admin\PostController();
    $controller->edit();
}
// - création
elseif ($p === "admin.posts.create"){
    $controller = new \App\Controller\Admin\PostController();
    $controller->create();
}
// Suppression
elseif ($p === "admin.posts.delete"){
    $controller = new \App\Controller\Admin\PostController();
    $controller->delete();
}

//Catgories
// - index
elseif ($p === "admin.categories"){
    $controller = new \App\Controller\Admin\CategoryController();
    $controller->index();
}
// - création
elseif ($p === "admin.categories.create"){
    $controller = new \App\Controller\Admin\CategoryController();
    $controller->create();
}
// - édition
elseif ($p === "admin.categories.edit"){
    $controller = new \App\Controller\Admin\CategoryController();
    $controller->edit();
}
// - suppression
elseif ($p === "admin.categories.delete"){
    $controller = new \App\Controller\Admin\CategoryController();
    $controller->delete();
}

//Users
// - index
elseif ($p === "admin.users"){
    $controller = new \App\Controller\Admin\UserController();
    $controller->index();
}
// - création
elseif ($p === "admin.users.create"){
    $controller = new \App\Controller\Admin\UserController();
    $controller->create();
}
// - édition
elseif ($p === "admin.users.edit"){
    $controller = new \App\Controller\Admin\UserController();
    $controller->edit();
}
// - suppression
elseif ($p === "admin.users.delete"){
    $controller = new \App\Controller\Admin\UserController();
    $controller->delete();
}