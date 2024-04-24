<div class="container h-100">
    <div class="row my-5">
        <div class="col-xl-5 col-sm-4 my-5 justify-content-around">
            <div class="container-fluid">
                <img src="<?= $photoAuteur ?>" class="rounded w-100" alt="...">
            </div>
            <hr>
            <div class="progress mb-5  border border-dark" id="blips">
                <div class="progress-bar bg-primary progress-bar-striped border border-light" role="progressbar">
                    <span class="sr-only "></span>
                </div>
            </div>
        </div>
        <div class="col-xl-5 d-flex align-items-start mx-5 px-5">
            <table class="text-light mt-5">
                <thead>
                    <tr>
                        <th scope="row" class="display-5 pt-5"><?= $nomAuteur ?></th>
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
                        <td class="pt-2 pb-5"><?= $naissanceAuteur . ' ' . '/' . ' ' . $mortAuteur ?></td>
                    </tr>
                    <tr>
                        <td class="py-3"><a href="?page=details&id=<?= $id_auteur ?>&id_citation=<?= $id_citation ?>" class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 border-2 text-light">Détails et vulgarisation</a></td>
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