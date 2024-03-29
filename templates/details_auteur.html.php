<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?= $resultatAuteur['photo'] ?>" class="img-fluid my-4 border border-top-1 border-5 rounded-circle" alt="..." style="width: 50%">
            <br>
            <br>
            <div>
                <p class="display-8 py-4 my-5 mx-4 text-center text-light"><?= $resultatAuteur['biographie'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php foreach ($resultatCitations as $resultat) : ?>
        <hr>
        <div class="card bg-dark text-light border mb-3 my-4">
            <div class="card-header  border">
                <h5 class="card-title"><?= $resultatAuteur['prenom'] . ' ' . $resultatAuteur['nom'] ?></h5>
            </div>
            <div class="card-body">
                <p><?= $resultat['citation'] ?></p>
                <br>
                <p class="card-text"><?= $resultat['explication'] ?></p>
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
    <?php endforeach ?>
</div>