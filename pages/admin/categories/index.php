<?php

$app = App::getInstance();
$categories = $app->getTable('Category')->all();
?>

<h1 class="mb-3">Administrer Les Catégories</h1>

<a class="btn btn-success mb-5" href="?p=category.create">Ajouter une catégorie</a>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Catégorie</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category->id ?></td>
                    <td class="col"><?= $category->name ?></td>
                    <td>
                        <a href="?p=category.edit&id=<?= $category->id ?>" class="btn btn-primary mb-2">Editer</a>
                        <form method="post" action="?p=category.delete">
                            <div class="d-flex">
                                <input type="hidden" name="id" value="<?= $category->id ?>">
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>


