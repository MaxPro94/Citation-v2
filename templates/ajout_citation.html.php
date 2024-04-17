<?php if ($_SESSION['id_droit'] == 1) : ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-white mt-4">Ajouter un Philosophe :</h3>
                <table class="table table-dark border border-secondary">
                    <thead>
                        <tr>
                            <th scope="col">Nom :</th>
                            <th scope="col">Prenom :</th>
                            <th scope="col">Naissance :</th>
                            <th scope="col">Décés :</th>
                            <th scope="col">Photo :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form action="">
                                    <input type="text">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="text">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="date">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="date">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="file">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3">Description :</th>
                            <th colspan="3">Biographie :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <form action="">
                                    <input type="text" class="w-100">
                                </form>
                            </td>
                            <td colspan="3>
                            <form action="">
                                <input type=" text" class="w-100">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-dark">Ajouter</button>
            </div>
            <hr class="mt-4">
            <div class="col-12">
                <h3 class="text-white mt-4">Ajouter une citation :</h3>
                <table class="table table-dark border border-secondary">
                    <thead>
                        <tr>
                            <th>Philosophe :</th>
                            <th>Citation :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1">
                                <form action="">
                                    <select name="" id="">
                                        <?php foreach ($resultats_auteurs as $auteur) : ?>
                                            <option value="<?= $auteur['nom'] ?>"><?= $auteur['nom'] . ' ' . $auteur['prenom'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="text" class="w-100">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-dark">Ajouter</button>
            </div>
            <hr class="mt-4">
            <div class="col-12">
                <h3 class="text-white mt-4">Modifier une citation</h3>
                <table class="table table-dark border border-secondary">
                    <thead>
                        <tr>
                            <th scope="col">Nom :</th>
                            <th scope="col">Prenom :</th>
                            <th scope="col">Naissance :</th>
                            <th scope="col">Décés :</th>
                            <th scope="col">Photo :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form action="">
                                    <input type="text">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="text">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="date">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="date">
                                </form>
                            </td>
                            <td>
                                <form action="">
                                    <input type="file">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th colspan="3">Description :</th>
                            <th colspan="3">Biographie :</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <form action="">
                                    <input type="text" class="w-100">
                                </form>
                            </td>
                            <td colspan="3">
                                <form action="">
                                    <input type=" text" class="w-100">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-dark">Modifier</button>
            </div>
        </div>
    </div>
<?php endif; ?>