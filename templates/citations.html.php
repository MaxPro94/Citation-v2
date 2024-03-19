<div class="container">
    <?php foreach ($resultats as $resultat) : ?>
        <div class="card text-bg-dark mb-3 my-4">
            <div class="card-header">
                <h5 class="card-title"><?= $resultat['prenom'] . ' ' . $resultat['nom'] ?></h5>

            </div>
            <div class="card-body">
                <p><?= $resultat['citation'] ?></p>
                <br>
                <p class="card-text"><?= $resultat['explication'] ?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>