<?php

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
} else {
    header('Location: ?page=connexion');
}
