<div class="container">
    <div class="row">
        <h1 class="text-white mt-3">Les actions sur les auteurs :</h1>
        <hr class="text-light mt-2">
        <div class="col mt-5">
            <h3 class="text-white mt-5 mb-3">Ajouter un Philosophe :</h3>
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
                                    <input type="text" name="name" class="form-control">
                                    <?php if (isset($error['name'])) : ?>
                                        <span class="text-danger"><?= $error['name'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="text" name="firstname" class="form-control">
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
                                    <input type="file" name="photo" class="text-center" class="form-control">
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
                                    <input type="number" name="naissance" class="form-control">
                                    <?php if (isset($error['naissance'])) : ?>
                                        <span class="text-danger"><?= $error['naissance'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="number" name="mort" class="form-control">
                                    <div class="form-text">La date de décés n'est pas obligatoire.</div>
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
                                    <textarea type="text" class="w-100" name="description" class="form-control"></textarea>
                                    <div class="form-text">Une courte presentation du philosophe (entre 250 et 350 caractères).</div>

                                    <?php if (isset($error['description'])) : ?>
                                        <span class="text-danger"><?= $error['description'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="3">
                                    <textarea type=" text" class="w-100" name="biographie" class="form-control"></textarea>
                                    <div class="form-text">Une presentation bien plus précise du philosophe (entre 350 et 700 caractères).</div>
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
            <h3 class="text-white mt-5 mb-3">Modifier un philosophe :</h3>
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
                                    <input name="update_lastname_auteur" class="form-control" id="update_lastname_auteur" type="text" value="">
                                    <?php if (isset($error['update_lastname_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_lastname_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input name="update_firstname_auteur" class="form-control" id="update_firstname_auteur" type="text" value="">
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
                                    <input name="update_picture_auteur" class="form-control" id="update_picture_auteur" type="file" value="">
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
                                    <input name="update_naissance_auteur" class="form-control" id="update_naissance_auteur" type="number" value="">
                                    <?php if (isset($error['update_naissance_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_naissance_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input name="update_deces_auteur" class="form-control" id="update_deces_auteur" type="number" value="">
                                    <div id="emailHelp" class="form-text">La date de décés n'est pas obligatoire.</div>
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
                                    <textarea name="update_description_auteur" class="form-control" id="update_description_auteur" class="w-100"></textarea>
                                    <div class="form-text">Une courte presentation du philosophe (Minimum 250 caractères).</div>
                                    <?php if (isset($error['update_description_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['update_description_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="2">
                                    <textarea name="update_biographie_auteur" class="form-control" id="update_biographie_auteur" class="w-100"></textarea>
                                    <div class="form-text">Une biographie du philosophe (Minimum 400 caractères).</div>
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
            <h3 class="text-white mt-5 mb-3">Supprimer un philosophe :</h3>
            <?php if (isset($validationDeleteAuteur)) : ?>
                <span class="text-success"><?= $validationDeleteAuteur ?></span>
            <?php endif; ?>
            <?php if (isset($error['delete_auteur'])) : ?>
                <span class="text-danger"><?= $error['delete_auteur'] ?></span>
            <?php endif; ?>
            <div class="col-12 mb-4 px-2 border border-top-0 border-bottom-0 border-5 rounded">
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
        </div>
    </div>
</div>
<script src="assets/js/check_citation.js"></script>
<script src="assets/js/check_auteur.js"></script>