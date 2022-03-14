<?php
$app = App::getInstance();
$categoryTable = $app->getTable("Category");
if(!empty($_POST)):
    $result = $categoryTable->update(
            $_GET['id'],
            [
                'name' => $_POST['name'],
            ]
    );
    if($result):
        ?>
        <div class="alert alert-success mt-3" role="alert">
            <p>La categorie a bien été modifiée</p>
        </div>
<?php endif;
endif;



$post = $app->getTable('Category')->find($_GET['id']);

?>

<div class="col-sm-8">
    <h1><?= $post->name ?></h1>

    <form method="post">
        <div class="form-group">
            <label for="title">Nom de la catégorie</label>
            <input class="form-control" type="text" name="name" value="<?= $post->name ?>">
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </form>

</div>