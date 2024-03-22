<?php
$title = "Inscription";

// Si $_POST['submit_login_inscription'] existe (Donc quand l'utilisateur appuie sur le submit)
if (isset($_POST['submit_login_inscription'])) {


    // On créer une variable qui contiendras un tableau qui contiendras les messages d'erreurs.
    $errors = [];

    // Si tout les $_POST que nous avons besoin existe bien
    if (isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['password']) && isset($_POST['password2'])) {
        // On met nos input dans des variable afin d'avoir une syntaxe et un code plus lisible:
        $mail = $_POST['email'];
        $pseudo = $_POST['pseudo'];
        $nom = $_POST['lastname'];
        $prenom = $_POST['firstname'];
        $pwd = $_POST['password'];
        $pwd2 = $_POST['password2'];


        // On peut maintenant verifier que les champs sont remplis correctements.


        if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) { // On applique un filtre avec filter_var qui va valider si l'email est au bon format
            // On stock l'erreur mail dans le tableau créer plus tot et nous lui indiquons une clé (['email']) afin de pouvoir l'afficher plus tard.
            $errors['email'] = "Le champs e-mail doit être renseigner avec un e-mail valide.";
        }

        if (empty($pseudo) || strlen($pseudo) <= 1) {
            $errors['pseudo'] = "Veuillez renseigner un pseudo de plus d'un caractère.";
        }

        if (empty($nom) || strlen($nom) <= 1) {
            $errors['nom'] = "Veuillez renseigner un nom de plus d'un caractère";
        }

        if (empty($prenom) || strlen($prenom) <= 1) {
            $errors['prenom'] = "Veuillez renseigner un prenom de plus d'un caractère";
        }

        if (empty($pwd)) {
            $errors['pwd'] = "Veuillez renseigner un mot de passe";
        }

        if (empty($pwd2)) {
            $errors['pwd2'] = "Veuillez renseigner la verification du mot de passe";
        }

        if ($pwd === $pwd2) {
            $pwd = $pwd2;
            if (!preg_match('/[a-zA-Z0-9\!\@\$\€\*\^\§\%\&]{8,32}/', $pwd)) {
                $errors['pwd-not-accept'] = "Le mot de passe renseigner doit contenir entre 8 et 32 carcatères avec des minuscules, des MAJUSCULES et des caractères spéciaux comme @,$,€,*,^,§,%,&.";
            }
        } else {
            $errors['pwd-not-identical'] = "Les mots de passes rensegnier ne sont pas identiques";
        }

        if (empty($errors)) { // Si le tableau des erreurs est vide:

            // On verifie que l'email renseigner par l'utilisateur existe déjà dans la BDD.
            $requete_mail_user = $dbh->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE mail = '$mail'");
            $requete_mail_user->execute();
            $verif_mail_user = $requete_mail_user->fetch();


            if ($verif_mail_user['nb'] > 0) { // Si la variable est true cela veut dire que l'email renseigner est déjà enregistrer en BDD.
                $errors['mail_already_exist'] = "Le mail renseigner existe déjà.";
            } else {

                // Un fois la verification de l'existence du mot de passe en BDD nous pouvons passer a l'insertion des données.
                $salt = "mx1"; // Nous créons un grains de sel a rajouter au mot de pasee de l'utilisteur, afin de pouvoir controler les modifications qui pourrait être apporter a notre BDD sans notre accord.

                $pwd = password_hash($pwd . $salt, PASSWORD_BCRYPT); // Nous hashons le mot de passe et ajoutons le grain de sel avant l'insertion.
                $requete = $dbh->prepare("INSERT INTO utilisateur (nom, prenom, mail, motdepasse, nom_compte, img_profil, id_droit) VALUES (:nom, :prenom, :mail, :pwd, :pseudo, :img_profil, :id_droit)");
                $requete->execute([
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'mail' => $mail,
                    'pwd' => $pwd,
                    'pseudo' => $pseudo,
                    'img_profil' => 1,
                    'id_droit' => 1
                ]);

                if ($dbh->lastInsertID()) { // Si la base de donnée nous retourne bien un id (Le dernier créer) donc le création du compte a bien été effectuer.

                    session_start();
                    $new_user = $dbh->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
                    $new_user->execute([
                        'mail' => $mail
                    ]);
                    $data_new_user = $new_user->fetch();

                    $_SESSION['user_id'] = $data_new_user['id_utilisateur'];
                    $_SESSION['name'] = $data_new_user['nom_compte'];


                    $img_user = $dbh->prepare("SELECT * FROM image_user WHERE id_img = :img_profil");
                    $img_user->execute([
                        'img_profil' => $data_new_user['img_profil']
                    ]);
                    $data_img_user = $img_user->fetch();

                    $_SESSION['img'] = $data_img_user['img'];

                    // Nous redirigons l'utilisateur sur la page d'acceuil.
                    header('Location: index.php');
                    exit;
                } else {
                    $errors['insert'] = "Un problème est survenu lors de l'insertion des données.";
                }
            }
        }
    }
}
