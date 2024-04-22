<div class="container py-4 my-5">
    <div class="row justify-content-center my-5 py-5">
        <div class="col-12 col-md-4 mb-5 py-3 border rounded bg-dark">
            <div class="d-flex justify-content-center">
                <img src="assets/img/logo/MetaMind144" width="80" height="80" class="d-inline-block align-top border-secondary rounded mx-2 mb-2" alt="">
            </div>
            <form method="POST">
                <label for="email" class="form-label text-white">Email:</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Marc-Aurèle@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span><?= $errors['email'] ?></span>
                <?php endif ?>
                <br>
                <label for="password" class="form-label text-white">Mot de passe:</label>
                <input required type="password" class="form-control" name="password" id="password">
                <?php if (isset($errors['password'])) : ?>
                    <span><?= $errors['password'] ?></span>
                <?php endif ?>
                <hr class="text-light">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="submit_login_connex">Connexion</button>
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary my-2" href="?page=inscription">Vous n'avez pas de compte ?</a>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href="?page=index">Continuer en tant que visiteur.</a>
            </div>
        </div>
        <br>
    </div>
</div>