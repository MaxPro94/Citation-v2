<?php

require "../src/actions/check_fav.php";
session_start();

$title = "Mon compte";

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


    $requete_img = $dbh->prepare("SELECT * FROM image_user WHERE id_img = :id_img");
    $requete_img->execute([
        'id_img' => $resultat['img_profil']
    ]);
    $resultat_img = $requete_img->fetch();

    $img = $resultat_img['img'];

    if ($droit === 1) {
        $droit = "Bellatores (Les nobles (prince, seigneurs, chevaliers)).";
    }
    if ($droit === 2) {
        $droit = "Laboratores (Les paysans, les tenanciers/vilains).";
    }
    if ($droit === 3) {
        $droit = "Oratores (Hommes pieux, le clergé).";
    }

    $requete_fav = $dbh->prepare("SELECT * FROM favoris JOIN citations JOIN auteur WHERE id_user = :id_user AND favoris.id_citation = citations.id_citations AND citations.id_auteur = auteur.id_auteur");
    $requete_fav->execute([
        'id_user' => $_SESSION['user_id']
    ]);
    $resultat_fav = $requete_fav->fetchAll();

    if (isset($_POST['submit_fav'])) {
        $id_citation = $_POST['submit_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("INSERT INTO favoris (id_user, id_citation) VALUES (:id_user, :id_citation)");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $id_citation
        ]);
        header("Refresh: 0");
    }
    if (isset($_POST['delete_fav'])) {
        $id_citation = $_POST['delete_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("DELETE FROM favoris WHERE id_user = :id_user AND id_citation = :id_citation ");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $id_citation
        ]);
        header("Refresh: 0");
    }
} else {
    header('Location: ?page=connexion');
}
