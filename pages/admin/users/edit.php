<?php
$app = App::getInstance();
$userTable = $app->getTable("User");
if(!empty($_POST)):
    $result = $userTable->update(
            $_GET['id'],
            [
                'lastname' => $_POST['lastname'],
                'firstname' => $_POST['firstname'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'job' => $_POST['job'],
                'company' => $_POST['company'],
                'city' => $_POST['city'],
                'country' => $_POST['country'],
            ]
    );
    if($result):
        ?>
        <div class="alert alert-success mt-3" role="alert">
            <p>L'utilisateur a bien été modifié</p>
        </div>
<?php endif;
endif;



$user = $app->getTable('User')->find($_GET['id']);

?>

<div class="col-sm-8">
    <h1>Modification de l'utilisateur : <?= $user->lastname . " " . $user->firstname ?></h1>

    <form method="post">
        <div class="form-group">
            <label for="lastname">Nom</label>
            <input class="form-control" type="text" name="lastname" value="<?= $user->lastname ?>">
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input class="form-control" name="firstname" value="<?= $user->firstname ?>" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" value="<?= $user->email ?>" />
        </div>
        <div class="form-group">
            <label for="phone">Tel</label>
            <input class="form-control" name="phone" value="<?= $user->phone ?>" />
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input class="form-control" name="job" value="<?= $user->job ?>" />
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input class="form-control" name="company" value="<?= $user->company ?>" />
        </div>
        <div class="form-group">
            <label for="city">Ville</label>
            <input class="form-control" name="city" value="<?= $user->city ?>" />
        </div>
        <div class="form-group">
            <label for="country">Pays</label>
            <input class="form-control" name="country" value="<?= $user->country ?>" />
        </div>
        <button class="btn btn-primary" type="submit">Sauvegarder</button>
    </form>

</div>