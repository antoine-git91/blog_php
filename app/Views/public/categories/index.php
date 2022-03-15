
<div class="col-10">
    <h1 class="mt-5 mb-5">Listes des catégories</h1>

    <?php foreach ($categories as $category): ?>
        <!-- Category template -->
            <article class='card mb-3'>
                <div class='card-header'>
                    <h2><?= $category->name ?></h2>
                </div>
                <div class='card-body'><?= $category->description ?></div>
                <div class='card-footer text-right'>
                    <a href="<?= $category->url ?>" class="btn btn-primary">Voir tous les posts</a>
                </div>
            </article>
    <?php endforeach; ?>
</div>
