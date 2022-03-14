<?php
$app = App::getInstance();
$postTable = $app->getTable("Post");
$categories = $app->getTable('Category')->all();
if(!empty($_POST)){
    $result = $postTable->create(
        [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'category_id' => $_POST['category']
        ]
    );
    if($result){
        $new_post = $app->getDatabase()->lastInsertId();
        header('Location: index.php?p=post.single&id=' . $new_post);
    }
}

?>

<div class="col-sm-8">
    <h1>Création d'un users</h1>

    <form method="post">
        <div class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control" type="text" name="lastname" />
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" name="firstname" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="phone">Tel</label>
            <input type="tel" class="form-control" name="phone"/>
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" class="form-control" name="job" />
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" name="company" />
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" class="form-control" name="city" />
        </div>
        <div class="form-group">
            <label for="country">Pays</label>
            <input type="text" class="form-control" name="country" />
        </div>
        <button class="btn btn-primary" type="submit">Créer</button>
    </form>

</div>