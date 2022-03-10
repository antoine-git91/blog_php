<?php

use App\App;
use App\Entity\Categorie;
use App\Entity\Post;
use App\Entity\User;

$post = Post::find($_GET['id']);
if($post === false){
    App::notFound();
}

//App::setTitle($post->title . " by " . $post->firstname . " " . $post->lastname);
?>

<div class="row">
    <div class="col-sm-10">
        <h1><?= $post->title ?> by <a href="<?= $post->url ?>"><em><?= $post->firstname . " " . $post->lastname ?></em></a></h1>
        <em><?= $post->name ?></em>
        <hr/>
        <p><?= $post->content ?></p>
    </div>
</div>
