<?php

$posts = App::getInstance()->getTable('Post')->getPosts();

?>

<!-- Posts -->
<div class="row">
    <div class="col-sm-10">
        <h2>Posts :</h2>
        <hr/>
        <div class="container-fluid">
            <div class="row row-cols-1">

                <?php foreach ($posts as $post): ?>
                    <!-- Post template -->
                    <a href="<?= $post->url ?>">
                        <article class='card mb-3'>
                            <div class='card-header'>
                                <h5><?= $post->title ?> <em><?= $post->categorie ?></em></h5>
                                <small>Written by <strong><?= $post->firstname . " " . $post->lastname ?></strong> the <em><?= $post->date ?></em></small>
                            </div>
                            <div class='card-body'><?= $post->content ?></div>
                            <!--<div class='card-footer text-right'>
                                <a href="<?/*= $post->urlDelete; */?>" class="btn btn-danger">Delete</a>
                            </div>-->
                        </article>
                    </a>
                    <!-- / -->
                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <?php include ROOT . "/parts/categories/categories_sidebar.php" ?>
</div>

