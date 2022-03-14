<?php
$noAuth = false;
if(!empty($_POST)){
    $auth = new \Core\Auth\DBAuth(App::getInstance()->getDatabase());
    if($auth->login($_POST['email'], $_POST['password'])){
        header("Location: admin.php");
    } else {
        $noAuth = true;
    }
}
?>

<div class="col-sm-10">
    <form method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" autofocus required />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" autofocus required />
        </div>
        <button type="submit" class="btn btn-primary">Connexion</button>
    </form>
    <?php
        if($noAuth){
             ?>
            <div>
                <p>Identifiant incorrect</p>
            </div>
    <?php
        }
    ?>
</div>
