<?php
$app = App::getInstance();
$userTable = $app->getTable("User");
var_dump($_POST);
if(!empty($_POST)){
    $result = $userTable->delete($_POST['id']);
    var_dump($result);
    if($result){
        header('Location: index.php?p=authors');
    }
}
