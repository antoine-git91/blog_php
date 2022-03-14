<?php

$app = App::getInstance();

$user = $app->getTable('User')->find($_GET['id']);
$posts_user = $app->getTable('Post')->findByUser($_GET['id']);
?>

<div class="row mt-5 mb-5">
    <div class="col-2">
        <img src="<?= $user->avatar ?>" alt="">
    </div>
    <div class="col-8">
        <h1><?= $user->lastname . " " . $user->firstname ?></h1>
        <p><?= $user->job ?> / <?= $user->country ?></p>
    </div>
</div>
<div>
    <p class="h3 mb-3">Ses posts :</p>
    <?php if ($posts_user): ?>
        <?php foreach ($posts_user as $post): ?>
            <article class='card mb-3'>
                <div class='card-header'>
                    <h2><?= $post->title ?></h2>
                </div>
                <div class='card-body'><?= $post->excerpt ?></div>
                <div class='card-footer text-right'>
                    <a href="<?= $post->url ?>" class="btn btn-primary">Lire la suite</a>
                </div>
            </article>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="alert alert-secondary" role="alert">
            Le user n'a écrit aucun post.
        </div>
    <?php endif; ?>
</div>

