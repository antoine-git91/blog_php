<?php
$categories = App::getInstance()->getTable('Category')->all();
?>

<div class="col-sm-2">
    <div class="container-fluid pt-5">
        <p>Catégories :</p>
        <ul>
            <?php foreach ($categories as $categorie): ?>
                <li>
                    <a href="<?= $categorie->url ?>"><?= $categorie->name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
