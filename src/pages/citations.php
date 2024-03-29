<?php
session_start();
require '../src/actions/check_fav.php';

$title = "Citations";

$nbPerPage = 15;

$requete = $dbh->query("SELECT * FROM citations JOIN auteur WHERE citations.id_auteur = auteur.id_auteur");
$resultats = $requete->fetchAll();

$requete_page = $dbh->query("SELECT COUNT(*) as nbCitations FROM citations");

$nbPages = ceil($requete_page->fetch()['nbCitations'] / $nbPerPage);
$start = 0;
$currentPage = 1;


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
