<?php

use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p='home';
}

//Auth
$app = App::getInstance();
$auth = new DBAuth($app->getDatabase());
if(!$auth->logged()){
    $app->forbidden();
}

ob_start();
if($p === 'home'){
    require ROOT . '/pages/admin/posts/index.php';
}
// Posts
// - index
elseif ($p === "posts"){
    require ROOT . '/pages/admin/posts/index.php';
}
// - post
elseif ($p === "post.single"){
    require ROOT . '/pages/admin/posts/post.php';
}
// - posts par catégories
elseif ($p === "posts.category"){
    require ROOT . '/pages/admin/posts/categorie.php';
}
// - édition
elseif ($p === "post.edit"){
    require ROOT . '/pages/admin/posts/edit.php';
}
// - création
elseif ($p === "post.create"){
    require ROOT . '/pages/admin/posts/create.php';
}
// Suppression
elseif ($p === "post.delete"){
    require ROOT . '/pages/admin/posts/delete.php';
}

//Catgories
// - index
elseif ($p === "categories"){
    require ROOT . '/pages/admin/categories/index.php';
}
// - création
elseif ($p === "category.create"){
    require ROOT . '/pages/admin/categories/create.php';
}
// - édition
elseif ($p === "category.edit"){
    require ROOT . '/pages/admin/categories/edit.php';
}
// - suppression
elseif ($p === "category.delete"){
    require ROOT . '/pages/admin/categories/delete.php';
}

//Users
// - index
elseif ($p === "users"){
    require ROOT . '/pages/admin/users/index.php';
}
// - création
elseif ($p === "user.create"){
    require ROOT . '/pages/admin/users/create.php';
}
// - édition
elseif ($p === "user.edit"){
    require ROOT . '/pages/admin/users/edit.php';
}
// - suppression
elseif ($p === "user.delete"){
    require ROOT . '/pages/admin/users/delete.php';
}
// 404
elseif ($p === "404"){
    require ROOT . '/pages/public/404.php';
}
$content = ob_get_clean();
require ROOT . '/pages/template/default.php';

