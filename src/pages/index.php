<?php

$title = "†";
require '../src/actions/check_fav.php';
session_start();

header("Refresh:10");
$requete = $dbh->prepare("SELECT * FROM citations ORDER BY RAND() LIMIT 1");
$requete->execute();

$resultat = $requete->fetch();


if ($resultat) {
    $citation = $resultat['citation'];
    $id_auteur = $resultat['id_auteur'];
    $id_citation = $resultat['id_citations'];



    $requeteAuteur = $dbh->prepare("SELECT auteur.nom, auteur.date_start, auteur.date_end, auteur.photo FROM auteur JOIN citations WHERE citations.id_citations = $id_citation AND auteur.id_auteur = $id_auteur;");
    $requeteAuteur->execute();
    $resultat = $requeteAuteur->fetch();

    $nomAuteur = $resultat['nom'];
    $naissanceAuteur = $resultat['date_start'];
    $mortAuteur = $resultat['date_end'];
    $photoAuteur = $resultat['photo'];
}

if (isset($_SESSION['user_id'])) {
    if (isset($_POST['submit_fav'])) {
        $id_citation = $_POST['submit_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("INSERT INTO favoris (id_user, id_citation) VALUES (:id_user, :id_citation)");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $_POST['submit_fav']
        ]);
        header("Refresh: 0");
    }
    if (isset($_POST['delete_fav'])) {
        $id_citation = $_POST['delete_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("DELETE FROM favoris WHERE id_user = :id_user AND id_citation = :id_citation ");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $_POST['delete_fav']
        ]);
        header("Refresh: 0");
    }
}

if (isset($_SESSION['user_id'])) {

    $requete_fav = $dbh->prepare("SELECT * FROM favoris WHERE id_user = :id_user");
    $requete_fav->execute([
        'id_user' => $_SESSION['user_id']
    ]);
    $resultat_fav = $requete_fav->fetchAll();
}
