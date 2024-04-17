<?php
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['id_droit'] == 1) {
        $requete_auteurs = $dbh->query("SELECT * FROM auteur");
        $resultats_auteurs = $requete_auteurs->fetchAll();
    }

    if (isset($_POST['add_auteur'])) {
        $error = [];
        if (empty($_POST['name']) || strlen($_POST['name']) <= 1) {
            $error['name'] = "Veuillez renseigner un nom de plus d'un caractère.";
        }
        if (empty($_POST['firstname']) || strlen($_POST['firstname']) <= 1) {
            $error['firstname'] = "Veuillez renseigner un prénom de plus d'un caractère.";
        }
        if (empty($_POST['naissance'])) {
            $error['naissance'] = "Veuillez renseigner une date de naissance";
        }
        if (empty($_FILES['photo'])) {
            $error['photo'] = "Veuillez renseigner une photo";
        }
    }

    if (isset($_POST['add_citation'])) {
    }

    if (isset($_POST['update_citation'])) {
    }
}
