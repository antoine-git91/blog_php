

<div class="row">
    <div class="col-sm-10">
        <h2 class="mt-5">Categorie : <?= $category->name ?></h2>
        <hr/>
        <div class="container-fluid">
            <?php if($posts): ?>
            <?php foreach ($posts as $post): ?>
                <!-- Post template -->
                    <a href="<?= $post->url ?>">
                        <article class='card'>
                            <div class='card-header'>
                                <h5><?= $post->title ?> <em><?= $post->name ?></em></h5>
                                <small>Written by <strong><?= $post->firstname . " " . $post->lastname ?></strong> the <em><?= $post->date ?></em></small>
                            </div>
                            <div class='card-body'><?= $post->content ?></div>
                        </article>
                    </a>
                <div class='w-100'>&nbsp;</div>
                <!-- / -->
            <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun article dans cette catégorie</p>
            <?php endif; ?>
        </div>
    </div>
    <?php include ROOT . "/app/Views/templates/parts/categories/categories_sidebar.php" ?>
</div>
