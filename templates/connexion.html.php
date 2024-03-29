<div class="container py-4 my-5">
    <div class="row justify-content-center my-5 py-5">
        <div class="col-12 col-md-4 py-5 my-5">
            <h1 class="text-white">Connexion</h1>
            <form method="POST">
                <label for="email" class="form-label text-white text-decoration-underline">Email:</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Marc-Aurèle@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span><?= $errors['email'] ?></span>
                <?php endif ?>
                <br>
                <label for="password" class="form-label text-white text-decoration-underline">Mot de passe:</label>
                <input required type="password" class="form-control" name="password" id="password">
                <?php if (isset($errors['password'])) : ?>
                    <span><?= $errors['password'] ?></span>
                <?php endif ?>
                <br>
                <button type="submit" class="btn btn-dark" name="submit_login_connex">Connexion</button>
                <a class="btn btn-dark my-2" href="?page=inscription">Vous n'avez pas de compte ?</a>
                <a class="btn btn-dark my-2" href="?page=index">Continuer en tant que visiteur.</a>
            </form>
        </div>
        <br>
    </div>
</div>