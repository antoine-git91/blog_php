<?php
$categories = App::getInstance()->getTable('Category')->all();
?>

<div class="col-sm-2">
    <div class="container-fluid pt-5">
        <p>Catégories :</p>
        <div class="list-group">
            <?php foreach ($categories as $categorie): ?>
                <?php
                    $active = "";
                    if(isset($_GET['p']) == "posts.category"){
                        if($categorie->id === $_GET['id']){
                            $active = "active";
                        }
                    }
                ?>
                <a href="<?= $categorie->url ?>" class="list-group-item list-group-item-action <?= $active ?>"><?= $categorie->name ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
