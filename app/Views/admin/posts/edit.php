
<div class="col-sm-8">
    <h1><?= $post->title ?></h1>

    <form method="post">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Catégories</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="category">
                <?php foreach ($categories as $category): ?>
                <?php
                    $a = "";
                    if($category->id === $post->c_id){
                        $a = "selected";
                    }
                ?>
                    <option value="<?= $category->id ?>" <?= $a ?>><?= $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title"></label>
            <input class="form-control" type="text" name="title" value="<?= $post->title ?>">
        </div>
        <div class="form-group">
            <label for="content"></label>
            <textarea class="form-control" name="content" rows="10"><?= $post->content ?></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </form>

</div>