<?php
session_start();

$title = "Citations";

$requete = $dbh->query("SELECT * FROM citations JOIN auteur WHERE citations.id_auteur = auteur.id_auteur");
$resultats = $requete->fetchAll();
