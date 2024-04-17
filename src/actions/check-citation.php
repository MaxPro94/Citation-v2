<?php

$requete = $dbh->prepare("SELECT * FROM auteur WHERE nom LIKE :nom ");
$requete->execute([
    'nom' => $_GET['add_auteur'] . '%'
]);

$data = $requete->fetchAll();
