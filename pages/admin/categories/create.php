<?php
$app = App::getInstance();
$postTable = $app->getTable("Category");
if(!empty($_POST)){
    $result = $postTable->create(
        [
            'name' => $_POST['name']
        ]
    );
    if($result){
        $new_post = $app->getDatabase()->lastInsertId();
        header('Location: admin.php?p=categories');
    }
}

?>

<div class="col-sm-8">
    <h1>Création d'une catégorie</h1>

    <form method="post">
        <div class="form-group">
            <label for="title"></label>
            <input class="form-control" type="text" name="name">
        </div>
        <button class="btn btn-primary" type="submit">Créer</button>
    </form>

</div>