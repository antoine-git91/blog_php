
<!-- Users -->
<h2>Nos auteurs :</h2>
<hr/>
<div class="container-fluid">
    <div class="row row-cols-5">
        <?php foreach ($users as $user): ?>
            <!-- UserEntity template -->
            <div class="card col-3 my-2 mx-2">
                <img src="<?= $user->avatar?>" class="card-img-top" alt="Profil">
                <div class="card-body">
                    <h5 class="card-title"><?= $user->firstname . " " . $user->lastname ?></h5>
                    <small><?= $user->job . "/" . $user->company ?></small>
                    <br/><br/>
                    <address><?= $user->address ?><br/><?= $user->city ?> &mdash; <?= $user->country ?></address>
                    <p class="card-text"><strong>Phone number :</strong><br/><?= $user->phone ?></p>
                    <a href="mailto:<?= $user->email ?>">Contact by mail</a>
                    <br/><br/>
                    <a class="btn btn-primary" href="<?= $user->url ?>">Voir ses posts</a>
                </div>
            </div>
            <!-- / -->
        <?php endforeach; ?>
    </div>
</div>