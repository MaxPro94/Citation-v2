<?php

$title = "Modification du compte";
session_start();


if (isset($_SESSION['user_id'])) {

    $userID = $_SESSION['user_id'];
    $pseudo = $_SESSION['name'];
    $title = "Compte de" . " " . $pseudo;

    $requete = $dbh->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = :id_utilisateur');
    $requete->execute([
        'id_utilisateur' => $userID
    ]);
    $resultat = $requete->fetch();

    $nom = $resultat['nom'];
    $prenom = $resultat['prenom'];
    $mail = $resultat['mail'];
    $droit = $resultat['id_droit'];
    $pwd = $resultat['motdepasse'];

    $requete = $dbh->prepare("SELECT * FROM image_user");
    $requete->execute();
    $resultat_img_profil = $requete->fetchAll();
}


if ($resultat['confirm'] > 0) {
    $erreurs = [];
    if (isset($_POST['submit_modif_prenom'])) {
        require 'data/db-connect.php';
        $prenom = $_POST['prenom'];

        if (empty($_POST['prenom']) || strlen($_POST['prenom']) <= 1) {
            $erreurs['prenom'] = "Veuillez entrez un prénom de plus d'une lettre";
        }
        $requete1 = $dbh->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
        $requete1->execute([
            'id_utilisateur' => $_SESSION['user_id']
        ]);

        $resultat = $requete1->fetch();
        if ($resultat['prenom'] === $prenom) {
            $erreurs['prenom'] = "Le nouveau prenom est identique a l'ancien";
        }

        if (empty($erreurs['prenom'])) {
            $requete = $dbh->prepare("UPDATE utilisateur SET prenom = :prenom WHERE id_utilisateur = :id_utilisateur");
            $requete->execute([
                ':prenom' => $prenom,
                'id_utilisateur' => $_SESSION['user_id']
            ]);
        }
    }

    if (isset($_POST['submit_modif_nom'])) {
        require 'data/db-connect.php';
        $nom = $_POST['nom'];

        if (empty($_POST['nom']) || strlen($_POST['nom']) <= 1) {
            $erreurs['nom'] = "Veuillez entrer un nom de plus d'un caractère";
        }

        $requete1 = $dbh->prepare("SELECT nom FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
        $requete->execute([
            'id_utilisateur' => $_SESSION['user_id']
        ]);

        if (empty($erreurs['nom'])) {
            $requete = $dbh->prepare("UPDATE utilisateur SET nom = :nom WHERE id_utilisateur = :id_utilisateur");
            $requete->execute([
                'nom' => $nom,
                'id_utilisateur' => $_SESSION['user_id']
            ]);
        }
    }

    if (isset($_POST['submit_modif_pseudo'])) {
        require 'data/db-connect.php';
        $pseudo = $_POST['pseudo'];

        if (empty($_POST['pseudo']) || strlen($_POST['pseudo']) <= 1) {
            $erreurs['pseudo'] = "Veuillez entrer un pseudo de plus d'un caractère";
        }

        if (empty($_POST['pseudo']) || strlen($_POST['pseudo']) > 15) {
            $erreurs['pseudo'] = "Veuillez entrer un pseudo de maximum 15 caractères";
        }

        $requete1 = $dbh->prepare("SELECT nom_compte FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
        $requete1->execute([
            'id_utilisateur' => $_SESSION['user_id']
        ]);
        $resultat = $requete1->fetch();
        if ($resultat['nom_compte'] === $pseudo) {
            $erreurs['pseudo'] = "Le nouveau pseudo est identique a l'ancien";
        }

        if (empty($erreurs['pseudo'])) {
            $requete = $dbh->prepare("UPDATE utilisateur SET nom_compte = :nom_compte WHERE id_utilisateur = :id_utilisateur");
            $requete->execute([
                'nom_compte' => $pseudo,
                'id_utilisateur' => $_SESSION['user_id']
            ]);
        }
    }

    if (isset($_POST['submit_modif_mail'])) {
        require 'data/db-connect.php';
        $mail = $_POST['mail'];

        if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $erreurs['mail'] = "Veuillez rensegnier un e-mail correct";
        }

        if (empty($erreurs['mail'])) {
            $requete = $dbh->prepare("SELECT mail FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
            $requete->execute([
                'id_utilisateur' => $_SESSION['user_id']
            ]);
            $resultat = $requete->fetch();

            if ($mail === $resultat['mail']) {
                $erreurs['mail'] = "Le nouveau e-mail et l'ancien e-mail sont identiques";
            }
        }

        if (empty($erreurs)) {
            $requete = $dbh->prepare("UPDATE utilisateur SET mail = :mail WHERE id_utilisateur = :id_utilisateur");
            $requete->execute([
                'mail' => $mail,
                'id_utilisateur' => $_SESSION['user_id']
            ]);
            $resultat = $requete->fetch();
        }
    }

    if (isset($_POST['submit_modif_pwd'])) {
        require 'data/db-connect.php';
        $pwd = $_POST['pwd'];

        $requete = $dbh->prepare("SELECT motdepasse FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
        $requete->execute([
            'id_utilisateur' => $_SESSION['user_id']
        ]);
        $resultat = $requete->fetch();

        if (password_verify($pwd, $resultat['motdepasse'])) {
            $erreurs['pwd'] = "Le nouveau et l'ancien mot de passe sont identiques";
        }

        if (!preg_match('/[a-zA-Z0-9\!\@\$\€\*\^\§\%\&]{8,32}/', $pwd)) {
            $erreurs['pwd_preg'] = "Le mot de passe renseigner doit contenir entre 8 et 32 carcatères avec des minuscules, des MAJUSCULES et des caractères spéciaux comme @,$,€,*,^,§,%,&.";
        }

        if (empty($erreurs)) {
            $salt = 'mx1';
            $pwd = password_hash($pwd . $salt, PASSWORD_BCRYPT);
            $requete1 = $dbh->prepare("UPDATE utilisateur SET motdepasse = :motdepasse WHERE id_utilisateur = :id_utilisateur");
            $requete1->execute([
                'motdepasse' => $pwd,
                'id_utilisateur' => $_SESSION['user_id']
            ]);
        }
    }

    if (isset($_POST['submit_modif_img'])) {
        $requete = $dbh->prepare("UPDATE utilisateur SET img_profil = :img_profil WHERE id_utilisateur = :id_utilisateur");
        $requete->execute([
            'img_profil' => $_POST['submit_modif_img'],
            'id_utilisateur' => $_SESSION['user_id']
        ]);

        $requete = $dbh->prepare("SELECT * FROM image_user WHERE id_img = :id_img");
        $requete->execute([
            'id_img' => $_POST['submit_modif_img']
        ]);
        $resultat_img = $requete->fetch();
        $_SESSION['img'] = $resultat_img['img'];
    }
} else {
    $erreurs['confirm'] = "Veuillez confirmer votre compte avant de modifier ses données.";
}
