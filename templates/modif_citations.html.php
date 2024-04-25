<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-white my-3">Ajouter une citation :</h3>
            <?php if (isset($validationAddCitation)) : ?>
                <span class="text-danger"><?= $validationAddCitation ?></span>
            <?php endif; ?>
            <?php if (isset($error['addCita'])) : ?>
                <span class="text-danger"><?= $error['addCita'] ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 border border-top-0 border-bottom-0 border-5 rounded">
                <form action="" method="POST">
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th>Philosophe :</th>
                                <th>Année de parution de la citation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1">
                                    <select name="choix_auteur" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option value="<?= $auteur['nom'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['choix_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['choix_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="number" name="date_citation">
                                    <?php if (isset($error['date_citation'])) : ?>
                                        <span class="text-danger"><?= $error['date_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Citations :</th>
                                <th>Explication / Vulgarisation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea type="text" class="w-100" name="citation"></textarea>
                                    <?php if (isset($error['citation'])) : ?>
                                        <span class="text-danger"><?= $error['citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <textarea type="text" class="w-100" name="explication"></textarea>
                                    <?php if (isset($error['explication'])) : ?>
                                        <span class="text-danger"><?= $error['explication'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-secondary text-light w-100" name="add_citation">Ajouter</button>
                </form>
            </div>
            <hr class="mt-4">
            <h3 class="text-white my-3">Modifier une citation :</h3>
            <?php if (isset($validationUpdateCitation)) : ?>
                <span class="text-success"><?= $validationUpdateCitation ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 border border-top-0 border-bottom-0 border-5 rounded">
                <h5 class="text-white mx-2 text-decoration-underline">D'abord choisissez la citation a modifier :</h5>
                <form action="" method="POST">
                    <table class="table table-dark table-striped border border-secondary" id="update_cit">
                        <thead>
                            <tr>
                                <th class="text-center">Choix du philosophe :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <select name="select_auteur" id="select_aut" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="text-truncate" value="<?= $auteur['nom'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['select_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['select_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary rounded">
                        <thead>
                            <tr>
                                <th class="text-center">Choix de la citation à modifier:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="text-truncate text-center">
                                    <select class="form-select form-select-sm text-center" aria-label=".form-select-sm example" name="select_citation" id="select_cita">
                                    </select>
                                    <?php if (isset($error['select_citation'])) : ?>
                                        <span class="text-danger"><?= $error['select_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="text-white mt-2 mx-2 text-decoration-underline">Modifier les données de la citation choisie :</h5>
                    <table class="table table-dark table-striped border border-secondary" id="temp_modif_cit">
                        <thead>
                            <tr>
                                <th>Année :</th>
                                <th>ID Auteur :</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_nb">

                            <tr>
                                <td>
                                    <input name="update_annee" id="annee" type="number" value="">
                                    <?php if (isset($error['update_annee'])) : ?>
                                        <span class="text-danger"><?= $error['update_annee'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input name="update_IDauteur" id="IDauteur" type="number" value="">
                                    <?php if (isset($error['update_IDauteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_IDauteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>Citation :</th>
                                <th>Explication :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="id_citation" id="id_citation" type="hidden" value="">
                                    <textarea name="update_citation" id="citation" class="w-100"></textarea>
                                    <?php if (isset($error['update_citation'])) : ?>
                                        <span class="text-danger"><?= $error['update_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <textarea name="update_explication" id="explication" class="w-100"></textarea>
                                    <?php if (isset($error['update_explication'])) : ?>
                                        <span class="text-danger"><?= $error['update_explication'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-secondary text-light w-100" name="submit_update_citation">Modifier</button>
                </form>
            </div>
            <hr class="mt-4">
            <h3 class="text-white my-3">Supprimer une citation :</h3>
            <?php if (isset($error['delete_ok'])) : ?>
                <span class="text-danger"><?= $error['delete_ok'] ?></span>
            <?php endif; ?>
            <?php if (isset($error['delete'])) : ?>
                <span class="text-danger"><?= $error['delete'] ?></span>
            <?php endif; ?>
            <?php if (isset($error['ID'])) : ?>
                <span class="text-danger"><?= $error['ID'] ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 mb-4 border border-top-0 border-bottom-0 border-5 rounded">
                <form action="" method="POST">
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th class="text-center">Choix du philosophe :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="text-center">
                                    <select name="select_auteur" id="select_auteur" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="w-100" value="<?= $auteur['nom'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['select_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['select_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th class="text-center">Choix de la citation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1" class="text-center text-truncate">
                                    <select name="select_cita" id="select_citation" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                    </select>
                                    <?php if (isset($error['select_citation'])) : ?>
                                        <span class="text-danger"><?= $error['select_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-secondary text-light w-100" name="delete_citation">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/check_citation.js"></script>
<script src="assets/js/check_auteur.js"></script>