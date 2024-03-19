<div class="container">
    <h1 class="my-5">Les philosophes</h1>

    <?php foreach ($resultats as $resultat) : ?>

        <div class="card mb-3 my-5">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= $resultat['photo'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $resultat['nom'] ?></h5>
                        <h5 class="card-title"><?= $resultat['prenom'] ?></h5>
                        <br>
                        <br>
                        <br>
                        <p class="card-text"><?= $resultat['description'] ?></p>
                        <br>
                        <br>
                        <p class="card-text"><small class="text-body-secondary"><?= $resultat['date_start'] . ' ' . '/' . ' ' . $resultat['date_end'] ?></small></p>
                        <a href="?page=details_auteur&id=<?= $resultat['id_auteur'] ?>" class="btn btn-primary">Détails</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>