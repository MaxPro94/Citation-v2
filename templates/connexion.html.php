<div class="container py-4 my-5">
    <div class="row justify-content-center my-5 py-5">
        <div class="col-12 col-md-4 mb-5 py-3 border border-primary rounded bg-dark">
            <div class="d-flex justify-content-center">
                <img src="assets/img/logo/Logo complet" width="140" height="140" class="d-inline-block align-top border-secondary rounded mx-2 mb-2" alt="">
            </div>
            <div class="form-text text-center"><i>"Cherche tes modèles dans les cieux, puisque tu as un esprit; Ton modèle, c'est le soleil"</i></div>
            <div class="form-text text-center"><i>Hamlet; acte 1, scène 3, William Shakespeare.</i></div>
            <form method="POST">
                <label for="email" class="form-label text-white">Email:</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Marc-Aurèle@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span class="text-danger"><?= $errors['email'] ?></span>
                <?php endif ?>
                <br>
                <label for="password" class="form-label text-white">Mot de passe:</label>
                <input required type="password" class="form-control" name="password" id="password">
                <?php if (isset($errors['password'])) : ?>
                    <span class="text-danger"><?= $errors['password'] ?></span>
                <?php endif ?>
                <hr class="text-light mx-3">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 text-light" name="submit_login_connex">Connexion</button>
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <a class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 my-2 text-light" href="?page=inscription">Vous n'avez pas de compte ?</a>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 my-2 text-light" href="?page=forgot_password">Mot de passe oublié ?</a>
            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 text-light" href="?page=index">Continuer en tant que visiteur.</a>
            </div>
        </div>
        <br>
    </div>
</div>