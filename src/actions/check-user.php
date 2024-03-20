<?php

$requete = $dbh->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE mail = :mail");
$requete->execute([
    'mail' => $_GET['mail']
]);

$data = $requete->fetch();
