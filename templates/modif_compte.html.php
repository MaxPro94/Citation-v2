<div class="container">
    <div class="row d-flex justify-content-center my-5">
        <h2 class="text-center text-light my-3">Modification des informations du compte</h2>
        <div class="col-6">
            <form class="my-5 text-light" action="" method="POST">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="<?= $prenom ?>">
                    <?php if (isset($erreurs['prenom'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['prenom'] ?></span>
                    <?php endif; ?>
                    <button name="submit_modif_prenom" class="btn btn-primary w-100 my-3" type="submit">Modifier le prénom</button>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nom :</label>
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="<?= $nom ?>">
                    <?php if (isset($erreurs['nom'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['nom'] ?></span>
                    <?php endif; ?>
                    <button name="submit_modif_nom" class="btn btn-primary w-100 my-3" type="submit">Modifier le nom</button>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Pseudonyme :</label>
                    <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="<?= $pseudo ?>">
                    <?php if (isset($erreurs['pseudo'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['pseudo'] ?></span>
                    <?php endif; ?>
                    <button name="submit_modif_pseudo" class="btn btn-primary w-100 my-3" type="submit">Modifier le pseudonyme</button>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">E-mail :</label>
                    <input type="mail" id="mail" name="mail" class="form-control" placeholder="<?= $mail ?>">
                    <?php if (isset($erreurs['mail'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['mail'] ?></span>
                    <?php endif; ?>
                    <button name="submit_modif_mail" class="btn btn-primary w-100 my-3" type="submit">Modifier l'E-mail</button>
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Mot de passe :</label>
                    <input type="password" id="pwd" name="pwd" class="form-control" placeholder="<?= $pwd ?>">
                    <?php if (isset($erreurs['pwd'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['pwd'] ?></span>
                    <?php endif; ?>
                    <?php if (isset($erreurs['pwd_preg'])) : ?>
                        <span class="my-1 text-danger"><?= $erreurs['pwd_preg'] ?></span>
                    <?php endif; ?>
                    <button name="submit_modif_pwd" class="btn btn-primary w-100 my-3" type="submit">Modifier le mot de passe</button>
                </div>
            </form>
        </div>
        <hr class="text-white">
    </div>
    <div class="row d-flex justify-content-center">
        <h2 class="text-center mb-4 text-light">Modification de l'image de profil</h2>
        <?php foreach ($resultat_img_profil as $resultat) : ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 bg-dark text-light" data-aos="">
                    <img src="<?= $resultat['img'] ?>" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h4><?= $resultat['nom'] ?></h4>
                        <div class="d-flex align-items-center">
                            <p class="text-center mt-4"><?= $resultat['description'] ?></p>
                        </div>
                    </div>
                    <div class="card-footer text-center border-light mx-3">
                        <form method="POST">
                            <button class="btn btn-primary" name="submit_modif_img" value="<?= $resultat['id_img'] ?>">Choisir</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>