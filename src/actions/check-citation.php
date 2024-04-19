<?php

$requete = $dbh->prepare("SELECT citations.* FROM auteur JOIN citations  ON auteur.id_auteur = citations.id_auteur WHERE auteur.nom LIKE :nom");
$requete->execute([
    'nom' => $_GET['add_auteur'] . '%'
]);

$data = $requete->fetchAll();
