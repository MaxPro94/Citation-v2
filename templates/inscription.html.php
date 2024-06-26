<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-2">
            <h1 class="mt-3 text-white">Envie de rejoindre Meta-Mindset ?</h1>
            <p class="py-1 px-2 text-white"><small>N'hésite plus et inscris-toi !</small></p>
            <form action="" method="POST" id="form" class="p-4 border rounded my-4 bg-dark text-white border-secondary">
                <div class="mb-3">
                    <label for="Name" class="form-label mx-3">Email :</label>
                    <div class="d-flex aligns-center">
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="name@example.com" required>
                        <input type="color" id="color_mail" class="form-control form-control-color mx-1 " value="#f8f9fa">
                    </div>
                    <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                    <div class="form-text">Un mail de vérification va vous être envoyé, merci de vérifier dans vos spams.</div>

                    <?php if (!empty($error['mail'])) : ?>
                        <span class="text-danger"><?= $error['mail'] ?></span>
                    <?php endif; ?>
                    <span class="text-danger" id="error_mail"></span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-3">Nom :</label>
                    <div class="d-flex aligns-center">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required>
                        <input type="color" id="color_lastname" class="form-control form-control-color mx-1" value="#f8f9fa">
                    </div>
                    <?php if (!empty($error['lastname'])) : ?>
                        <span class="text-danger"><?= $error['lastname'] ?></span>
                    <?php endif; ?>
                    <span class="text-danger" id="error_lastname"></span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-3">Prénom :</label>
                    <div class="d-flex aligns-center">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
                        <input type="color" id="color_firstname" class="form-control form-control-color mx-1" value="#f8f9fa">
                    </div>
                    <?php if (!empty($error['firstname'])) : ?>
                        <span class="text-danger"><?= $error['firstname'] ?></span>
                    <?php endif; ?>
                    <span class="text-danger" id="error_firstname"></span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-3">Pseudo :</label>
                    <div class="d-flex aligns-center">
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                        <input type="color" id="color_pseudo" class="form-control form-control-color mx-1" value="#f8f9fa">
                    </div>
                    <?php if (!empty($error['pseudo'])) : ?>
                        <span class="text-danger"><?= $error['pseudo'] ?></span>
                    <?php endif; ?>
                    <span class="text-danger" id="error_pseudo"></span>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mx-3">Mot de passe :</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="pwd2" name="pwd2" required>
                </div>
                <div class="h-25 my-1 progress" id="background_bar">
                    <div class="text-center progress-bar progress-bar-striped bg-danger" id="bar" role="progressbar" width="0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <div class="form-text">Votre mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un caractère spécial et être d'au moins 6 caractères de long.</div>
                <?php if (!empty($error['pwd'])) : ?>
                    <span class="text-danger"><?= $error['pwd'] ?></span>
                <?php endif; ?>
                <?php if (!empty($error['pwd2'])) : ?>
                    <span class="text-danger"><?= $error['pwd2'] ?></span>
                <?php endif; ?>
                <div class="mt-5">
                    <div class="d-flex justify-content-around">
                        <label for="exampleFormControlInput1" class="form-label mx-3">Question secrète :</label>
                        <select name="choice_secret_question" id="secret_question" class="form-select form-select-sm text-center w-50" aria-label=".form-select-sm example" required>
                            <?php foreach($resultat_question as $question): ?>
                                <option value="<?= $question['id_question'] ?>" ><?= $question['question'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control mt-2" id="secret_question_response" name="secret_question_response" required>
                        <input type="color" id="color_secret_question" class="form-control form-control-color mt-2 mx-1" value="#f8f9fa">
                    </div>

                    <div class="form-text">Cette question vous sera posée en cas de perte de mot de passe.</div>
                </div>
                <?php if (!empty($errors['insert'])) : ?>
                    <span class="text-danger"><?= $errors['insert'] ?></span>
                <?php endif; ?>
                <?php if (isset($errors['insert_question'])) : ?>
                    <span class="text-danger"><?= $errors['insert_question'] ?></span>
                <?php endif; ?>
                <span class="text-danger" id="error_question"></span><br>
                <?php if (isset($errors['question'])) : ?>
                    <span class="text-danger"><?= $errors['question'] ?></span>
                <?php endif; ?>
                <?php if (isset($errors['response_question'])) : ?>
                    <span class="text-danger"><?= $errors['response_question'] ?></span>
                <?php endif; ?>
                <span class="text-danger" id="error_pwd"></span><br>
                <span class="text-danger" id="error_pwd2"></span><br>
                <span class="text-danger" id="error_form"></span>
                <hr>
                <div class=" d-flex aligns-center justify-content-between">
                    <button type="submit" class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 text-light" name="submit_inscription" id="submit_inscription">S'inscrire</button>
                    <input type="hidden" name="submit_inscription">
                    <div class="d-flex aligns-center">
                        <a href="?page=connexion" class="btn btn-outline-primary border-top-0 border-end-0 border-start-0 text-light">Déjà un compte ?</a>
                    </div>
                </div>
            </form>
        </div>
        <script src="assets/js/controle_inscri.js"></script>
        <script src="assets/js/progress_bar_mdp.js"></script>
    </div>
</div>