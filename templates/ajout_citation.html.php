<?php if ($_SESSION['id_droit'] == 1) : ?>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 d-flex justify-content-around">
                <div class="text-center p-3 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light">Actions sur les philosophes :</h2>
                    <a class="btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-50 text-light mt-3" href="?page=modif_auteurs">Auteurs</a>
                </div>
                <div class="text-center p-3 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light">Actions sur les citations :</h2>
                    <a class="btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-50 text-light mt-3" href="?page=modif_citations">Citations</a>
                </div>
            </div>
            <h3 class="text-white my-3">Ajouter un Philosophe :</h3>
            <?php if (isset($validationAddAuteur)) : ?>
                <span class="text-success"><?= $validationAddAuteur ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 border border-top-0 border-bottom-0 border-5 rounded">
                <form action="" method="POST">
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Nom :</th>
                                <th scope="col">Prénom :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="name">
                                    <?php if (isset($error['name'])) : ?>
                                        <span class="text-danger"><?= $error['name'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="text" name="firstname">
                                    <?php if (isset($error['firstname'])) : ?>
                                        <span class="text-danger"><?= $error['firstname'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Photo :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <input type="file" name="photo" class="text-center">
                                    <?php if (isset($error['photo'])) : ?>
                                        <span class="text-danger"><?= $error['photo'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Naissance :</th>
                                <th scope="col">Décés :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" name="naissance">
                                    <?php if (isset($error['naissance'])) : ?>
                                        <span class="text-danger"><?= $error['naissance'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="number" name="mort">
                                    <div class="form-text text-secondary">La date de décés n'est pas obligatoire.</div>
                                    <?php if (isset($error['mort'])) : ?>
                                        <span class="text-danger"><?= $error['mort'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th colspan="3">Description :</th>
                                <th colspan="3">Biographie :
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <textarea type="text" class="w-100" name="description"></textarea>
                                    <div class="form-text text-secondary">Une courte presentation du philosophe (entre 250 et 350 caractères).</div>

                                    <?php if (isset($error['description'])) : ?>
                                        <span class="text-danger"><?= $error['description'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="3">
                                    <textarea type=" text" class="w-100" name="biographie"></textarea>
                                    <div class="form-text text-secondary">Une presentation bien plus précise du philosophe (entre 350 et 700 caractères).</div>
                                    </th>
                                    <?php if (isset($error['biographie'])) : ?>
                                        <span class="text-danger"><?= $error['biographie'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-secondary text-light w-100" name="add_auteur">Ajouter</button>
                </form>
            </div>
            <hr class="mt-4">
            <h3 class="text-white my-3">Modifier un philosophe :</h3>
            <?php if (isset($validationUpdateAuteur)) : ?>
                <span class="text-danger"><?= $validationUpdateAuteur ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 border border-top-0 border-bottom-0 border-5 rounded">
                <h5 class="mx-2 text-decoration-underline text-light">D'abord choisissez le philosophe a modifier :</h5>
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
                                    <select name="select_update_auteur" id="auteur_to_update" class="form-select form-select-sm text-center" aria-label=".form-select-sm example">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="text-truncate" value="<?= $auteur['id_auteur'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['select_update_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['select_update_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="mt-2 mx-2 text-decoration-underline text-light">Modifier les données du philosophe choisit :</h5>
                    <table class="table table-dark table-striped border border-secondary" id="temp_modif_cit">
                        <thead>
                            <tr>
                                <th>Nom :</th>
                                <th>Prénom :</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_nb">
                            <tr>
                                <td>
                                    <input name="update_lastname_auteur" id="update_lastname_auteur" type="text" value="">
                                    <?php if (isset($error['update_lastname_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_lastname_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input name="update_firstname_auteur" id="update_firstname_auteur" type="text" value="">
                                    <?php if (isset($error['update_firstname_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_firstname_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th>Photo :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <input name="update_picture_auteur" id="update_picture_auteur" type="file" value="">
                                    <?php if (isset($error['update_picture_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_picture_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th>Naissance:</th>
                                <th>Décés :</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_nb">
                            <tr>
                                <td>
                                    <input name="update_naissance_auteur" id="update_naissance_auteur" type="number" value="">
                                    <?php if (isset($error['update_naissance_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_naissance_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input name="update_deces_auteur" id="update_deces_auteur" type="number" value="">
                                    <div id="emailHelp" class="form-text text-secondary">La date de décés n'est pas obligatoire.</div>
                                    <?php if (isset($error['update_deces_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_deces_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-dark table-striped border border-secondary">
                        <thead>
                            <tr>
                                <th colspan="1">Description :</th>
                                <th colspan="2">Biographie :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1">
                                    <textarea name="update_description_auteur" id="update_description_auteur" class="w-100"></textarea>
                                    <div class="form-text text-secondary">Une courte presentation du philosophe (Minimum 250 caractères).</div>
                                    <?php if (isset($error['update_description_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_description_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="2">
                                    <textarea name="update_biographie_auteur" id="update_biographie_auteur" class="w-100"></textarea>
                                    <div class="form-text text-secondary">Une biographie du philosophe (Minimum 400 caractères).</div>
                                    <?php if (isset($error['update_biographie_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_explication_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-secondary text-light w-100" name="submit_update_auteur">Modifier</button>
                </form>
            </div>
            <hr class="mt-4">
            <h3 class="text-white my-3">Supprimer un philosophe :</h3>
            <?php if (isset($validationDeleteAuteur)) : ?>
                <span class="text-success"><?= $validationDeleteAuteur ?></span>
            <?php endif; ?>
            <?php if (isset($error['delete_auteur'])) : ?>
                <span class="text-danger"><?= $error['delete_auteur'] ?></span>
            <?php endif; ?>
            <div class="col-12 px-2 border border-top-0 border-bottom-0 border-5 rounded">
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
                                    <select class="form-select form-select-sm text-center" name="auteur_to_delete" aria-label=".form-select-sm example">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="w-100" value="<?= $auteur['id_auteur'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['auteur_to_delete'])) : ?>
                                        <span class="text-danger"><?= $error['auteur_to_delete'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-secondary text-light w-100" name="submit_delete_auteur">Supprimer</button>
                </form>
            </div>
            <hr class="mt-4">
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
    <script src="assets/js/check_citation.js"></script>
    <script src="assets/js/check_auteur.js"></script>
<?php endif; ?>