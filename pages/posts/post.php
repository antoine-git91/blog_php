<?php

$app = App::getInstance();

$post = $app->getTable('Post')->find($_GET['id']);
$user = $app->getTable('User')->find($post->u_id);

if($post === false){
    $app->notFound();
}

$app->title = $post->title;

?>

<div class="row">
    <div class="col-sm-10">
        <h1><?= $post->title ?> by <a href="<?= $user->url ?>"><em><?= $user->firstname . " " . $user->lastname ?></em></a></h1>
        <em><?= $post->name ?></em>
        <hr/>
        <p><?= $post->content ?></p>
    </div>
</div>
