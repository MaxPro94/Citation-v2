<div class="container my-5 py-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12  my-3">
            <h1 class="text-center text-light">Welcome home <?= $prenom . " " . $nom ?></h1>
            <h4 class="mt-5 text-light">Votre image de profil :</h4>
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid img-thumbnail my-4 border-secondary" src="<?= $img ?>" alt="">
                <p class="text-center text-light p-4"><?= $resultat_img['description'] ?></p>
            </div>
            <h3 class="mt-5 text-light">Vous faites parti des <?= $droit ?></h3>
            <div class="my-4">
                <a name="button_modif" href="?page=modif_compte" class="btn btn-warning" type="submit">Modifier mon compte</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-light py-3 mt-2">Vos citations favorites :</h1>
            <?php if (!empty($resultat_fav)) : ?>
                <?php foreach ($resultat_fav as $fav) : ?>
                    <div class="card bg-dark text-light mb-3 my-4 border">
                        <div class="card-header">
                            <h5 class="card-title"><?= $fav['prenom'] . ' ' . $fav['nom'] ?></h5>
                        </div>
                        <div class="card-body border">
                            <p><?= $fav['citation'] ?></p>
                            <br>
                            <p class="card-text"><?= $fav['explication'] ?></p>
                            <?php if (isset($_SESSION['user_id'])) : ?>
                                <?php if (in_fav($fav['id_citations'], $resultat_fav)) : ?>
                                    <form method="POST">
                                        <button type="submit" name="delete_fav" class="btn p-0 m-0" value="<?= $fav['id_citations'] ?>"> <span class="material-symbols-outlined text-warning">
                                                stars
                                            </span></button>
                                    </form>
                                <?php else : ?>
                                    <form method="POST">
                                        <button type="submit" name="submit_fav" class="btn p-0 m-0" value="<?= $fav['id_citations'] ?>"><span class="material-symbols-outlined text-warning">
                                                star
                                            </span></button>
                                    </form>
                                <?php endif ?>
                            <?php endif ?>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <h3 class="text-light py-3 mt-2 text-center">Aucune citation dans vos favoris</h3>
                <p class="text-secondary text-center">Pour ajouté une citation cliquez sur la petite étoile : <button class="btn p-0 m-0 d-inline"> <span class="material-symbols-outlined text-warning">
                            star
                        </span></button></p>


            <?php endif ?>
        </div>
    </div>
</div>