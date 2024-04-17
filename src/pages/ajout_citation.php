<?php
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['id_droit'] == 1) {
        $requete_auteurs = $dbh->query("SELECT * FROM auteur");
        $resultats_auteurs = $requete_auteurs->fetchAll();
    }
}
