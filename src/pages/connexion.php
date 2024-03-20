<?php
var_dump($_POST);

$title = "Connexion";

if (isset($_POST['submit_login_connex'])) {
    $errors = [];

    // Je vérifie si le champ est vide, inférieur ou égal à 1, ou s'il ne remplit pas les prérequis souhaités pour un e-mail.
    if (empty($_POST['email']) || strlen($_POST['email']) <= 1 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Le champs e-mail doit être remplie et doit comporter plus d'un caractère.";
    }

    // Je vérifie si le champ est vide ou s'il possède les prérequis souhaités pour un mot de passe.
    if (empty($_POST['password'] || !preg_match('/[a-zA-Z0-9\!\@\$\€\*\^\§\%\&]{8,32}/', $_POST['password']))) {
        $errors['password'] = "Le champs mot de passe doit êtrer renseigner.";
    }

    // Si la variable n'existe pas
    if (!isset($errors['email'])) {

        $mail = $_POST['email'];
        $requete = $dbh->query("SELECT * FROM utilisateur WHERE mail = '$mail'");
        $requete->fetch();

        // Si le résultat du comptage des ligne est inférieur ou égal a 0
        if ($requete->rowCount() <= 0) {
            $errors['email'] = "Aucun e-mail existant a ce nom.";
        }
    }

    // Si la variable est vide.
    if (empty($errors)) {

        $salt = "mx1";
        $email = $_POST['email'];
        $pwd = $_POST['password'] . $salt;

        $requete = $dbh->prepare("SELECT * FROM utilisateur WHERE mail = :email");
        $requete->execute([
            'email' => $email
        ]);
        $utilisateur = $requete->fetch();

        // Si la variable utilisateur est true (elle est true par si elle possède une valeur, si elle n'est pas vide.) 
        if (password_verify($pwd, $utilisateur['motdepasse'])) {

            session_start();

            $_SESSION['user_id'] = $utilisateur['id_utilisateur'];
            $_SESSION['name'] = $utilisateur['nom_compte'];


            $requete = $dbh->prepare("SELECT * FROM image_user WHERE id_img = :id_img");
            $requete->execute([
                'id_img' => $utilisateur['img_profil']
            ]);

            $resultat_img = $requete->fetch();

            $_SESSION['img'] = $resultat_img['img'];


            header('Location: index.php');
            exit;
        } else {
            $errors['email'] = 'E-mail ou le mot de passe invalide';
            $errors['password'] = 'E-mail ou le mot de passe invalide';
        }
    }
}
