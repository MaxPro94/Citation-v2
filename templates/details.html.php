<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-5">
            <div class="card bg-dark text-light mb-3 my-4 ">
                <img src="<?= $resultat_auteur['photo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $resultat_auteur['prenom'] . ' ' . $resultat_auteur['nom'] ?></h5>
                    <p class="font-weight-bold"><?= $resultat_auteur['date_start'] . ' ' . '/' . ' ' . $resultat_auteur['date_end'] ?></p>
                    <p class="card-text"><?= $resultat_auteur['description'] ?></p>
                    <div class="card-footer d-flex justify-content-center border-light">
                        <a href="?page=details_auteur&id=<?= $resultat_auteur['id_auteur'] ?>" class="btn btn-primary  w-50">Détails</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-dark text-light mb-3 my-4 border">
            <div class="card-header border-primary">
                <h5 class="card-title">"<?= $resultat_citation['citation'] ?>"</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $resultat_citation['explication'] ?></p>
                <div class="d-flex justify-content-between">
                    <p class="blockquote-footer mt-2"><?= $resultat_auteur['nom'] . ' ' . $resultat_auteur['prenom'] ?>.</p>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if (in_fav($resultat_citation['id_citations'], $resultat_fav)) : ?>
                            <form method="POST">
                                <button type="submit" name="delete_fav" class="btn" value="<?= $resultat_citation['id_citations'] ?>"> <span class="material-symbols-outlined text-warning">
                                        stars
                                    </span></button>
                            </form>
                        <?php else : ?>
                            <form method="POST">
                                <button type="submit" name="submit_fav" class="btn" value="<?= $resultat_citation['id_citations'] ?>"><span class="material-symbols-outlined text-warning">
                                        star
                                    </span></button>
                            </form>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        </div>

    </div>
</div>