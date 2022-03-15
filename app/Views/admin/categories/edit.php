
<div class="col-sm-8">
    <h1><?= $category->name ?></h1>

    <form method="post">
        <div class="form-group">
            <label for="title">Nom de la catégorie</label>
            <input class="form-control" type="text" name="name" value="<?= $category->name ?>">
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </form>

</div>