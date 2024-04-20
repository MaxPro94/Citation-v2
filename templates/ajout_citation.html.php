<?php if ($_SESSION['id_droit'] == 1) : ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (isset($validationAddAuteur)) : ?>
                    <span class="text-success"><?= $validationAddAuteur ?></span>
                <?php endif; ?>
                <h3 class="text-white mt-4">Ajouter un Philosophe :</h3>

                <div id="emailHelp" class="form-text text-secondary mb-1">Tout les champs sont obligatoires, sauf décés.</div>
                <form action="" method="POST">
                    <table class="table table-dark border border-secondary">
                        <thead>
                            <tr>
                                <th scope="col">Nom :</th>
                                <th scope="col">Prénom :</th>
                                <th scope="col">Naissance :</th>
                                <th scope="col">Décés :</th>
                                <th scope="col">Photo :</th>
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
                                <td>
                                    <input type="number" name="naissance">
                                    <?php if (isset($error['naissance'])) : ?>
                                        <span class="text-danger"><?= $error['naissance'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="number" name="mort">
                                    <div id="emailHelp" class="form-text text-secondary">La date de décés n'est pas obligatoire.</div>
                                    <?php if (isset($error['mort'])) : ?>
                                        <span class="text-danger"><?= $error['mort'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <input type="file" name="photo">
                                    <?php if (isset($error['photo'])) : ?>
                                        <span class="text-danger"><?= $error['photo'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th colspan="3">Description :
                                    <div id="emailHelp" class="form-text text-secondary">Une courte presentation du philosophe (entre 250 et 350 caractères).</div>
                                </th>
                                <th colspan="3">Biographie :
                                    <div id="emailHelp" class="form-text text-secondary">Une presentation bien plus précise du philosophe (entre 350 et 700 caractères).</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <textarea type="text" class="w-100" name="description"></textarea>
                                    <?php if (isset($error['description'])) : ?>
                                        <span class="text-danger"><?= $error['description'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="3">
                                    <textarea type=" text" class="w-100" name="biographie"></textarea>
                                    <?php if (isset($error['biographie'])) : ?>
                                        <span class="text-danger"><?= $error['biographie'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-outline-dark text-light w-100" name="add_auteur">Ajouter</button>
                </form>
            </div>
            <hr class="mt-4">
            <div class="col-12">
                <h3 class="text-white mt-4">Ajouter une citation :</h3>
                <form action="" method="POST">
                    <table class="table table-dark border border-secondary">
                        <thead>
                            <tr>
                                <th>Philosophe :</th>
                                <th>Année de parution de la citation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1">
                                    <select name="choix_auteur" id="">
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
                    <button class="btn btn-dark w-100" name="add_citation">Ajouter</button>
                </form>

            </div>
            <hr class="mt-4">
            <div class="col-12">
                <h3 class="text-white mt-4">Modifier une citation :</h3>
                <h5 class="text-white mt-4 mx-2">D'abord choisissez la citation a modifier :</h5>
                <form action="" method="POST">
                    <table class="table table-dark border border-secondary" id="update_cit">
                        <thead>
                            <tr>
                                <th>Choix du philosophe :</th>
                                <th>Choix de la citation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1">
                                    <select name="select_auteur" id="select_aut">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="w-100" value="<?= $auteur['nom'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['select_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['select_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="1">
                                    <select class="text-wrap" name="select_citation" id="select_cita">

                                    </select>
                                    <?php if (isset($error['select_citation'])) : ?>
                                        <span class="text-danger"><?= $error['select_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h5 class="text-white mt-2 mx-2">Modifier les données de la citation choisie :</h5>
                    <form action="" method="POST">
                        <table class="table table-dark border border-secondary" id="temp_modif_cit">
                            <thead>
                                <tr>
                                    <th>Année :</th>
                                    <th>ID Auteur :</th>
                                </tr>
                            </thead>
                            <tbody id="tbody_nb">

                                <tr>
                                    <td>
                                        <input id="annee" type="number" value="">
                                    </td>
                                    <td>
                                        <input id="IDauteur" type="number" value="">
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
                                        <textarea id="citation" class="w-100"></textarea>
                                    </td>
                                    <td>
                                        <textarea id="explication" class="w-100"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <a class="btn btn-dark w-100" name="update_citation">Modifier</a>
                </form>
            </div>
            <hr class="mt-4">
            <div class="col-12 mb-5">
                <h3 class="text-white mt-4">Supprimer une citation :</h3>
                <form action="" method="POST">
                    <table class="table table-dark border border-secondary">
                        <thead>
                            <tr>
                                <th>Choix du philosophe :</th>
                                <th>Choix de la citation :</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="1">
                                    <select name="select_auteur" id="select_aut">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option class="w-100" value="<?= $auteur['id_auteur'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if (isset($error['select_auteur'])) : ?>
                                        <span class="text-danger"><?= $error['select_auteur'] ?></span>
                                    <?php endif; ?>
                                </td>
                                <td colspan="1">
                                    <select name="select_citation" id="select_cita">
                                        <option class="w-100" value=""></option>
                                    </select>
                                    <?php if (isset($error['select_citation'])) : ?>
                                        <span class="text-danger"><?= $error['select_citation'] ?></span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-dark w-100" name="update_citation">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/check_citation.js"></script>
<?php endif; ?>