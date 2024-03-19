<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <h1>Well hello buddy !</h1>
            <form action="/inscription.php" method="POST">
                <label for="lastname" class="form-label">Entrez votre nom :</label>
                <input required type="text" class="form-control" name="lastname" id="lastname" placeholder="Aurèlius" value="">
                <?php if (isset($errors)) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['nom'] ?>
                    </span>
                <?php endif ?>
                <br>
                <label for="firstname" class="form-label">Entrez votre prenom :</label>
                <input required type="text" class="form-control" name="firstname" id="firstname" placeholder="Marcus">
                <?php if (isset($errors['prenom'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['prenom'] ?>
                    </span>
                <?php endif ?>
                <br>
                <label for="pseudo" class="form-label">Entrez votre pseudo :</label>
                <input required type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Marcus-Aurelius">
                <?php if (isset($errors['pseudo'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['pseudo'] ?>
                    </span>
                <?php endif ?>
                <br>
                <label for="email" class="form-label">Entrez votre e-mail :</label>
                <input required type="email" class="form-control" name="email" id="email" placeholder="MarcAurele@gmail.ro">
                <?php if (isset($errors['email'])) : ?>
                    <span class="my-1 text-danger">
                        <?= $errors['email'] ?>
                    </span>
                <?php endif ?>
                <br>
                <label for="password" class="form-label">Entrez un mot de passe :</label>
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
                <br>
                <input required type="password" class="form-control" name="password2" id="password2">
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
                <br>
                <button type="submit" class="btn btn-primary" name="submit_login_inscription">Inscription</button>
            </form>
            <br>
            <a class="btn btn-primary" href="connexion.php">Vous avez déjà un compte ?</a>
        </div>
        <?php if (isset($errors['mail_already_exist'])) : ?>
            <div class="col-12 col-md-4 text-danger">
                <?= $errors['mail_already_exist'] ?>
            </div>
        <?php endif ?>
    </div>
</div>