<?php

define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p='home';
}

ob_start();
// Home
if($p === 'home'){
    require ROOT . '/pages/public/home.php';
}
// posts
elseif ($p === "post.single"){
    require ROOT . '/pages/public/posts/post.php';
} elseif ($p === "posts.category"){
    require ROOT . '/pages/public/posts/categorie.php';
}
// Categories
elseif ($p === "categories"){
    require ROOT . '/pages/public/categories/index.php';
}
// Authors
elseif ($p === "authors"){
    require ROOT . '/pages/public/authors/index.php';
}
elseif ($p === "user.single"){
    require ROOT . '/pages/public/authors/single.php';
}
// login
elseif ($p === "login"){
    require ROOT . '/pages/admin/login.php';
}
//404
elseif ($p === "404"){
    require ROOT . '/pages/404.php';
}
$content = ob_get_clean();
require ROOT . '/pages/template/default.php';
