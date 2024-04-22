<div class="container">
    <h1 class=" text-white py-3">Les philosophes</h1>
    <hr class="text-light">

    <?php foreach ($resultats as $resultat) : ?>

        <div class="card bg-dark text-white mb-3 my-5 border-bottom-0 border-start-0 border-3 border-primary">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= $resultat['photo'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $resultat['nom'] . ' ' . $resultat['prenom']  ?></h5>
                        <br>
                        <br>
                        <p class="card-text"><?= $resultat['description'] ?></p>
                        <br>
                        <br>
                        <p class="card-text"><small class="text-light"><?= $resultat['date_start'] . ' ' . '/' . ' ' . $resultat['date_end'] ?></small></p>
                        <hr class="mt-5 text-light">
                    </div>
                    <div class="bg-dark border-primary d-flex justify-content-center">
                        <a href="?page=details_auteur&id=<?= $resultat['id_auteur'] ?>" class="btn btn-primary text-dark p-0 w-75">Détails</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>