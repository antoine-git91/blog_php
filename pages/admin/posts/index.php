<?php

$app = App::getInstance();
$posts = $app->getTable('Post')->getPosts();
?>

<h1 class="mb-3">Administrer Les Posts</h1>

<a class="btn btn-success mb-5" href="?p=post.create">Ajouter un post</a>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Catégorie</th>
        <th>Titre</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $post->categorie ?></td>
                    <td class="col"><?= $post->title ?></td>
                    <td>
                        <a class="btn btn-primary mb-2" href="?p=post.edit&id=<?= $post->id ?>">Editer</a>
                        <form method="post" action="?p=post.delete">
                            <div class="d-flex">
                                <input type="hidden" name="id" value="<?= $post->id ?>">
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>


