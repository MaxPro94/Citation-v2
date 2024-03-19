<div class="bg-image" style="background-image: url('/assets/img/temple.bak.jpg'); width: 100%">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 col-md-6 my-5">
                <div class="card">
                    <img src="<?= $photoAuteur ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"<?= $citation ?>"</h5>
                        <p class="font-weight-bold"><?= $nomAuteur ?></p>
                        <p class="font-weight-bold"><?= $naissanceAuteur . ' ' . '/' . ' ' . $mortAuteur ?></p>
                        <a href="?page=details&id=<?= $id_auteur ?>&id_citation=<?= $id_citation ?>" class="btn btn-primary">Détails</a>
                    </div>
                </div>
                <hr>
                <div class="progress" id="blips">
                    <div class="progress-bar" role="progressbar">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/progress-bar.js"></script>