<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <h1>Well hello buddy !</h1>
            <form method="POST" id="form_inscription">
                <label for="lastname" class="form-label text-decoration-underline">Entrez votre nom :</label>
                <input required type="text" class="form-control" name="lastname" id="lastname" placeholder="Aurèlius" value="">
                <?php if (isset($errors)) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['nom'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger" id="alert_lastname"></span>
                <span class="text-success" id="succes_lastname"></span><br>

                <label for="firstname" class="form-label text-decoration-underline">Entrez votre prenom :</label>
                <input required type="text" class="form-control" name="firstname" id="firstname" placeholder="Marcus">
                <?php if (isset($errors['prenom'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['prenom'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger" id="alert_firstname"></span>
                <span class="text-success" id="succes_firstname"></span><br>

                <label for="pseudo" class="form-label text-decoration-underline">Entrez votre pseudo :</label>
                <input required type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Marcus-Aurelius">
                <?php if (isset($errors['pseudo'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pseudo'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger" id="alert_pseudo"></span>
                <span class="text-success" id="succes_pseudo"></span><br>

                <label for="email" class="form-label text-decoration-underline">Entrez votre e-mail :</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="MarcAurele@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['email'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger" id="alert_mail"></span>
                <span class="text-success" id="succes_mail"></span><br>

                <label for="password" class="form-label text-decoration-underline">Entrez un mot de passe :</label>
                <input required type="password" class="form-control" name="password" id="password">
                <?php if (isset($errors['pwd-not-accept'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pwd-not-accept'] ?>
                    </span>
                <?php endif ?>
                <?php if (isset($errors['pwd'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pwd'] ?>
                    </span>
                <?php endif ?>
                <?php if (isset($errors['pwd-not-identical'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pwd-not-identical'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger" id="alert_pwd"></span>
                <span class="text-success" id="succes_pwd"></span><br>
                <input required type="password" class="form-control text-decoration-underline" name="password2" id="password2">
                <?php if (isset($errors['pwd2'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pwd2'] ?>
                    </span>
                <?php endif ?>
                <?php if (isset($errors['pwd-not-identical'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pwd-not-identical'] ?>
                    </span>
                <?php endif ?>
                <span class="text-danger mb-1" id="alert_pwd"></span>
                <span class="text-success" id="succes_pwd"></span><br>
                <button id="btn" class="btn btn-primary" type="submit" name="submit_login_inscription">Inscription</button>
                <input type="hidden" name="submit_login_inscription" value="1" />
            </form>
            <br>
            <a class="btn btn-primary" href="?page=connexion">Vous avez déjà un compte ?</a>
        </div>
        <?php if (isset($errors['mail_already_exist'])) : ?>
            <div class="col-12 col-md-4 text-danger">
                <?= $errors['mail_already_exist'] ?>
            </div>
        <?php endif ?>
        <span class="text-danger mb-1" id="alert_form"></span>
        <span class="text-success" id="succes_form"></span><br>
    </div>
</div>
<script src="assets/js/controle_inscri.js"></script>