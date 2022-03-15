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
    <h1>Création d'un post</h1>

    <form method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title"></label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="content"></label>
            <textarea class="form-control" name="content" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Créer</button>
    </form>

</div>