<?php
$title = "Auteurs";
session_start();
$requete = $dbh->query("SELECT * FROM auteur");
$resultats = $requete->fetchAll();
