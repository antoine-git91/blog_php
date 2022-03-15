
<div class="col-sm-10">
    <form method="post">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" autofocus required />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" required />
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
