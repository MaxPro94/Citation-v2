<?php
session_start();

if (isset($_GET['id'])) {

    $requete = $dbh->prepare('SELECT * FROM auteur WHERE id_auteur = :id_auteur');
    $requete->execute([
        'id_auteur' => $_GET['id']
    ]);

    $resultatAuteur = $requete->fetch();
    $title = $resultatAuteur['nom'];

    $requete = $dbh->prepare('SELECT * FROM citations WHERE id_auteur = :id_auteur');
    $requete->execute([
        'id_auteur' => $_GET['id']
    ]);

    $resultatCitations = $requete->fetchAll();
}
