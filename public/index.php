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
if($p === 'home'){
    require ROOT . '/pages/home.php';
} elseif ($p === "post.single"){
    require ROOT . '/pages/posts/post.php';
} elseif ($p === "posts.category"){
    require ROOT . '/pages/categories/categorie.php';
} elseif ($p === "404"){
    require ROOT . '/pages/404.php';
}
$content = ob_get_clean();
require ROOT . '/pages/template/default.php';
