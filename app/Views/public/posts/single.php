

<div class="row">
    <div class="col-sm-10 mt-5">
        <div class="mb-5">
            <h1><?= $post->title ?> by <a href="<?= $user->url ?>"><em><?= $user->firstname . " " . $user->lastname ?></em></a></h1>
            <em><?= $post->name ?></em>
            <hr/>
        </div>
        <p><?= $post->content ?></p>
    </div>
    <?php include ROOT . "/app/Views/templates/parts/categories/categories_sidebar.php" ?>
</div>
