<div class="container mb-5 mt-2 h-100">
    <div class="row mb-5">
        <div class="col-xl-6 col-sm-4 my-5 justify-content-around">
            <div class="card">
                <img src="<?= $photoAuteur ?>" class="rounded" alt="...">
            </div>
            <hr>
            <div class="progress mb-5" id="blips">
                <div class="progress-bar bg-dark progress-bar-striped" role="progressbar">
                    <span class="sr-only "></span>
                </div>
            </div>
        </div>
        <div class="col my-5">
            <table class="mx-5 mt-5 text-light">
                <thead>
                    <tr>
                        <th scope="row" class="display-5 py-5"><?= $nomAuteur ?></th>
                    </tr>
                </thead>
                <br>
                <tbody>
                    <tr>
                        <td class="py-3 display-8">" <?= $citation ?> "</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="py-2"><?= $naissanceAuteur . ' ' . '/' . ' ' . $mortAuteur ?></td>
                    </tr>
                    <tr>
                        <td class="py-3"><a href="?page=details&id=<?= $id_auteur ?>&id_citation=<?= $id_citation ?>" class="btn btn-dark ">Détails et vulgarisation</a></td>
                        <?php if (isset($_SESSION['user_id'])) : ?>
                            <?php if (in_fav($id_citation, $resultat_fav)) : ?>
                                <td>
                                    <form class="d-inline" method="POST">
                                        <button type="submit" name="delete_fav" class="btn" value="<?= $id_citation ?>">
                                            <span class="material-symbols-outlined text-warning py-2">
                                                stars
                                            </span>
                                        </button>
                                    </form>
                                </td>          
                            <?php else : ?>
                                <td>
                                    <form class="d-inline" method="POST">
                                        <button type="submit" name="submit_fav" class="btn d-inline" value="<?= $id_citation ?>">
                                            <span class="material-symbols-outlined text-warning py-2">
                                                star
                                            </span>
                                        </button>
                                    </form>
                                </td>                               
                            <?php endif ?>
                        <?php endif ?>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="assets/js/progress-bar.js"></script>