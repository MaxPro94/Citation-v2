<div class="container py-4 my-5">
    <div class="row justify-content-center my-5 py-5">
        <div class="col-12 col-md-4 my-5 py-3 border border-primary rounded bg-dark">
            <div class="d-flex justify-content-center">
                <img src="assets/img/logo/Logo complet" width="120" height="120" class="d-inline-block align-top border-secondary rounded mx-2 mb-2" alt="">
            </div>
            <div class="form-text text-center"><i>"Cherche tes modèles dans les cieux, puisque tu as un esprit; Ton modèle, c'est le soleil"</i></div>
            <div class="form-text text-center"><i>Hamlet; acte 1, scène 3, William Shakespeare.</i></div>
            <form method="POST" class="mt-3">
                <label for="email" class="form-label text-white">E-mail du compte :</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="Marc-Aurèle@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span class="text-danger"><?= $errors['email'] ?></span>
                <?php endif ?>
                <?php if (!empty($validationEmail)) : ?>
                    <span class="text-center text-success"><?= $validationEmail ?></span>
                <?php endif; ?>
                <?php if (isset($error['mail_confirm'])) : ?>
                    <span class="text-center text-danger"><?= $error['mail_confirm'] ?></span>
                <?php endif; ?>
                <br>
                <hr class="text-light mx-3">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 text-light" id=submit name="submit_forgot_password">Envoi d'un nouveau mot de passe</button>
                </div>
            </form>
        </div>
        <br>
    </div>
</div>
<script src="assets/js/forgot_password.js"></script>