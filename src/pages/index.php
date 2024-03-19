<?php

$title = "†";
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
