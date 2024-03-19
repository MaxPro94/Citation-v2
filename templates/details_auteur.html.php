<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <img src="<?= $resultatAuteur['photo'] ?>" class="img-fluid my-4 img-thumbnail" alt="..." style="width: 50%">
            <br>
            <br>
            <div>
                <p class="display-8 py-4 my-5 mx-4 text-center"><?= $resultatAuteur['biographie'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <?php foreach ($resultatCitations as $resultat) : ?>
        <div class="card text-bg-dark mb-3 my-4">
            <div class="card-header">
                <h5 class="card-title"><?= $resultatAuteur['prenom'] . ' ' . $resultatAuteur['nom'] ?></h5>
            </div>
            <div class="card-body">
                <p><?= $resultat['citation'] ?></p>
                <br>
                <p class="card-text"><?= $resultat['explication'] ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>