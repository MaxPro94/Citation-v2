<?php

// Dans le dossier actions nous ne trouverons uniquement des pages allant chercher des data au format json
// Le dossier actions est utiliser uniquement par la page api.php car elle est la seul a lui donner le chemin adéquat


$requete = $dbh->prepare("SELECT COUNT(*) AS nb FROM utilisateur WHERE mail = :mail");
$requete->execute([
    'mail' => $_GET['mail']
]);

$data = $requete->fetch();
