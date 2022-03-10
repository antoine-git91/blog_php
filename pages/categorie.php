<?php

use App\App;
use App\Entity\Categorie;
use App\Entity\Post;

$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}

$categories = Categorie::getAll();
$posts = Post::findByCategorie($_GET['id']);

?>

<div class="row">
    <div class="col-sm-10">
        <h2>Categorie : <?= $categorie->name ?></h2>
        <hr/>
        <div class="container-fluid">
            <?php if($posts): ?>
            <?php foreach ($posts as $post): ?>
                <!-- Post template -->
                <article class='card'>
                    <div class='card-header'>
                        <h5><?= $post->title ?> <em><?= $post->categorie ?></em></h5>
                        <small>Written by <strong><?= $post->firstname . " " . $post->lastname ?></strong> the <em><?= $post->date ?></em></small>
                    </div>
                    <div class='card-body'><?= $post->content ?></div>
                    <div class='card-footer text-right'>
                        <a href="<?= $post->url; ?>" class="btn btn-danger">Delete</a>
                    </div>
                </article>
                <div class='w-100'>&nbsp;</div>
                <!-- / -->
            <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun article dans cette catégorie</p>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="container-fluid p-5">
            <ul>
                <?php foreach ($categories as $categorie): ?>
                    <li>
                        <a href="<?= $categorie->url ?>"><?= $categorie->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
