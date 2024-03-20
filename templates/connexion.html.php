<div class="d-flex">
    <div id="connexion" class="container py-5 my-auto align-self-center">
        <div class="row  justify-content-center ">
            <div class="col-12 col-md-4">
                <h1>Connexion</h1>
                <form method="POST">
                    <label for="email" class="form-label">Email:</label>
                    <input required type="email" class="form-control" name="email" id="email" placeholder="Marc-Aurèle@gmail.ro">
                    <?php if (isset($errors['email'])) : ?>
                        <span><?= $errors['email'] ?></span>
                    <?php endif ?>
                    <br>
                    <label for="password" class="form-label">Mot de passe:</label>
                    <input required type="password" class="form-control" name="password" id="password">
                    <?php if (isset($errors['password'])) : ?>
                        <span><?= $errors['password'] ?></span>
                    <?php endif ?>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit_login_connex">Connexion</button>
                    <a class="btn btn-primary my-2" href="?page=inscription">Vous n'avez pas de compte ?</a>
                    <a class="btn btn-primary my-2" href="?page=home">Continuer en tant que visiteur.</a>
                </form>

            </div>
            <br>

        </div>
    </div>
</div>