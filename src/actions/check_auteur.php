<?php 
    $requete = $dbh->prepare("SELECT * FROM auteur WHERE id_auteur = :id_auteur");
    $requete->execute([
        'id_auteur' => $_GET['auteur']
    ]);
    $data = $requete->fetch();
