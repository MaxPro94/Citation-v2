<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 my-5">
            <div class="card">
                <img src="<?= $resultat_auteur['photo'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $resultat_auteur['prenom'] . ' ' . $resultat_auteur['nom'] ?></h5>
                    <p class="font-weight-bold"><?= $resultat_auteur['date_start'] . ' ' . '/' . ' ' . $resultat_auteur['date_end'] ?></p>
                    <p class="card-text"><?= $resultat_auteur['description'] ?></p>
                    <a href="?page=details_auteur&id=<?= $resultat_auteur['id_auteur'] ?>" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
        <div class="card text-bg-dark mb-3 my-4">
            <div class="card-header">
                <h5 class="card-title"><?= $resultat_citation['citation'] ?></h5>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $resultat_citation['explication'] ?></p>
                <p class="card-text"><?= $resultat_auteur['nom'] ?></p>
            </div>
        </div>

    </div>
</div>