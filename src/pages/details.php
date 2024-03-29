<?php


require '../src/actions/check_fav.php';
session_start();


if (isset($_GET['id'])) {

    $requete_auteur = $dbh->prepare("SELECT * FROM auteur WHERE id_auteur = :id_auteur");
    $requete_auteur->execute([
        ':id_auteur' => $_GET['id']
    ]);
    $resultat_auteur = $requete_auteur->fetch();
    $title = $resultat_auteur['nom'];

    $requete_citations = $dbh->prepare("SELECT * FROM citations WHERE id_auteur = :id_auteur");
    $requete_citations->execute([
        ':id_auteur' => $_GET['id']
    ]);
    $resultats_citations = $requete_citations->fetchAll();
}

if (isset($_GET['id_citation'])) {
    $requete = $dbh->prepare('SELECT * FROM citations WHERE id_citations = :id_citation');
    $requete->execute([
        ':id_citation' => $_GET['id_citation']
    ]);


    $resultat_citation = $requete->fetch();
}

if (isset($_SESSION['user_id'])) {
    if (isset($_POST['submit_fav'])) {
        $id_citation = $_POST['submit_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("INSERT INTO favoris (id_user, id_citation) VALUES (:id_user, :id_citation)");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $id_citation
        ]);
    }
    if (isset($_POST['delete_fav'])) {
        $id_citation = $_POST['delete_fav'];
        $id_user = $_SESSION['user_id'];

        $requete = $dbh->prepare("DELETE FROM favoris WHERE id_user = :id_user AND id_citation = :id_citation ");
        $requete->execute([
            'id_user' => $id_user,
            'id_citation' => $id_citation
        ]);
    }
}

if (isset($_SESSION['user_id'])) {

    $requete_fav = $dbh->prepare("SELECT * FROM favoris WHERE id_user = :id_user");
    $requete_fav->execute([
        'id_user' => $_SESSION['user_id']
    ]);
    $resultat_fav = $requete_fav->fetchAll();
}
