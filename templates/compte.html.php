<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12  my-3">
            <h1 class="text-center">Welcome home <?= $prenom . " " . $nom ?></h1>
            <h4 class="mt-5">Votre image de profil :</h4>
            <div class="d-flex justify-content-center align-items-center">
                <img class="img-fluid img-thumbnail my-4" src="<?= $img ?>" alt="">
                <p class="text-center p-4"><?= $resultat_img['description'] ?></p>
            </div>
            <h3 class="mt-5">Vous faites parti des <?= $droit ?></h3>
            <div class="my-4">
                <a name="button_modif" href="?page=modif_compte" class="btn btn-warning" type="submit">Modifier mon compte</a>
            </div>
        </div>
    </div>
</div>