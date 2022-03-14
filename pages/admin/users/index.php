<?php

$app = App::getInstance();
$users = $app->getTable('User')->all();
?>

<h1 class="mb-3">Administrer Les Users</h1>

<a class="btn btn-success mb-5" href="?p=user.create">Ajouter un user</a>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        <?php
            foreach ($users as $user): ?>
                <tr>
                    <td class="col-1"><?= $user->id ?></td>
                    <td class="col-2"><img src="<?= $user->avatar ?>" alt=""></td>
                    <td class="col-2"><?= $user->lastname ?></td>
                    <td><?= $user->firstname ?></td>
                    <td class="col-2">
                        <a class="btn btn-primary mb-2" href="?p=user.edit&id=<?= $user->id ?>">Editer</a>
                        <form method="post" action="?p=user.delete">
                            <div class="d-flex">
                                <input type="hidden" name="id" value="<?= $user->id ?>">
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </div>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>


