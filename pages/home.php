<?php

use App\Entity\Categorie;
use App\Entity\Post;

$posts = Post::getPosts();
$categories = Categorie::getAll();

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
                            <div class='card-footer text-right'>
                                <a href="<?= $post->urlDelete; ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </article>
                    </a>
                    <!-- / -->
                <?php endforeach; ?>

            </div>
        </div>

        <!-- Users -->
        <h2>Users :</h2>
        <hr/>
        <div class="container-fluid">
            <div class="row row-cols-5">

                <?php /*foreach (User::getUsers() as $user):*/?>
                <!-- User template -->
                <div class="card">
                    <img src="<?/*= $user->avatar */?>" class="card-img-top" alt="Profil">
                    <div class="card-body">
                        <h5 class="card-title"><?/*= $user->firstname . " " . $user->lastname */?></h5>
                        <small><?/*= $user->job . "/" . $user->company */?></small>
                        <br/><br/>
                        <address><?/*= $user->address */?><br/><?/*= $user->city */?> &mdash; <?/*= $user->country */?></address>
                        <p class="card-text"><strong>Phone number :</strong><br/><?/*= $user->phone */?></p>
                        <a href="mailto:<?/*= $user->email */?>">Contact by mail</a>
                        <br/><br/>
                        <a href="/pages/edit_user.php?id=<?/*= $user->id */?>" class="btn btn-primary">Edit</a> <a href="index.php?p=delete_user&id=<?/*= $user->id */?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <!-- / -->
                --><?php /*endforeach; */?>

            </div>
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

