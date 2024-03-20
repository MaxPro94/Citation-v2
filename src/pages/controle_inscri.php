<?php

$requete = $dbh->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE mail = '" . $_GET['mail'] . "'");
$requete->execute();

$resultat = $requete->fetch();

echo json_encode($resultat);

var_dump($resultat);
