<?php


use App\Autoloader;
use App\Database;

require_once("../App/Autoloader.php");
Autoloader::register();



$p = $_GET['p'] ?? 'home';

ob_start();
if($p === 'home'){
    require ("../pages/home.php");
} elseif ($p === 'add_post'){
    require ("../pages/add_post.php");
} elseif ($p === 'delete_post'){
    require ("../pages/delete_post.php");
} elseif ($p === 'add_user'){
    require ("../pages/add_user.php");
} elseif ($p === 'delete_user'){
    require ("../pages/delete_user.php");
} elseif ($p === 'categorie'){
    require ("../pages/categorie.php");
} elseif ($p === 'post'){
    require ("../pages/post.php");
} elseif ($p === '404'){
    require ("../pages/404.php");
}

$content=ob_get_clean();
require '../pages/template/default.php';