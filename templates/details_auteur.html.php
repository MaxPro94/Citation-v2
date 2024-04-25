<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <img src="<?= $resultatAuteur['photo'] ?>" class="img-fluid my-4 border border-light border-3 rounded-circle" alt="..." style="width: 50%">
        </div>
        <div>
            <p class="display-8 p-4 mt-5 mx-4 text-center text-light border border-primary rounded"><?= $resultatAuteur['biographie'] ?></p>
        </div>
    </div>
    <hr class="my-3 text-light">
</div>

<div class="container">
    <?php foreach ($resultatCitations as $resultat) : ?>
        <div class="card bg-dark text-light border mb-3 mt-4">
            <div class="card-header border-primary mx-3">
                <h5 class="card-title">" <?= $resultat['citation'] ?> "</h5>
            </div>
            <div class="card-body">
                <br>
                <p class="card-text"><?= $resultat['explication'] ?></p>
                <div class="d-flex justify-content-between">
                    <p class="blockquote-footer mx-3 mt-2"><i><?= $resultatAuteur['prenom'] . ' ' . $resultatAuteur['nom'] ?></i></p>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if (in_fav($resultat['id_citations'], $resultat_fav)) : ?>
                            <form method="POST">
                                <button type="submit" name="delete_fav" class="btn" value="<?= $resultat['id_citations'] ?>"> <span class="material-symbols-outlined text-warning">
                                        stars
                                    </span></button>
                            </form>
                        <?php else : ?>
                            <form method="POST">
                                <button type="submit" name="submit_fav" class="btn" value="<?= $resultat['id_citations'] ?>"><span class="material-symbols-outlined text-warning">
                                        star
                                    </span></button>
                            </form>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>