
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