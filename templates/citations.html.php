<div class="container">
    <h1 class="text-light py-3">Les citations</h1>
    <hr class="text-light">
    <?php foreach ($resultats as $resultat) : ?>
        <hr>
        <div class="card bg-dark text-light mb-3 my-5 border">
            <div class="card-header border-primary mx-3">
                <h5 class="card-title">" <?= $resultat['citation'] ?> "</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $resultat['explication'] ?></p>
                <div class="d-flex justify-content-between">
                    <p class="blockquote-footer mx-3 mt-2"><i><?= $resultat['prenom'] . ' ' . $resultat['nom'] ?></i></p>
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
    <div class="my-2">
        <div class="d-flex justify-content-center">
            <ul class="pagination d-flex justify-content-center bg-dark rounded w-50">
                <?php for($i = 1; $i <= $nbPages; $i++){
                    $paginationURL = '/?page=citations&pagination=' . $i;
                ?>
                <li class="page-item my-1">
                    <a class="mx-1 rounded btn btn-outline-primary text-light" href="<?= $paginationURL ?>"><?= $i ?></a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>