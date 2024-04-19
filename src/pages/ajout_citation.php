<?php
$title = "Ajouts BDD";
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
        if (empty($_POST['photo'])) {
            $error['photo'] = "Veuillez renseigner une photo";
        }

        if (!empty($_POST['mort'])) {
            $mort = $_POST['mort'];
            if (!isset($error['naissance'])) {
                $naissance = $_POST['naissance'];

                if ($naissance > $mort) {
                    $error['mort'] = "La date de décés ne peut être inférieur a la date de naissance";
                }
            }
        }

        if (empty($_POST['description']) || strlen($_POST['description']) < 350) {
            $error['description'] = "Veuillez renseigner une description de plus de 350 caractères.";
        }

        if (empty($_POST['biographie']) || strlen($_POST['biographie']) < 500) {
            $error['biographie'] = "Veuillez renseigner une biographie de plus de 500 caractères.";
        }

        if (empty($error)) {

            $name = ucfirst($_POST['name']);
            $firstname = ucfirst($_POST['firstname']);
            $description = ucfirst($_POST['description']);
            $biographie = ucfirst($_POST['biographie']);
            $photo = htmlspecialchars($_POST['photo']);

            $requete = $dbh->prepare("INSERT INTO auteur (nom, prenom, description, biographie, date_start, date_end, photo) VALUES (:nom, :prenom, :description, :biographie, :date_start, :date_end, :photo)");
            $requete->execute([
                'nom' => htmlspecialchars($name),
                'prenom' => htmlspecialchars($firstname),
                'description' => htmlspecialchars($description),
                'biographie' => htmlspecialchars($biographie),
                'date_start' => htmlspecialchars($naissance),
                'date_end' => htmlspecialchars($mort),
                'photo' => $photo
            ]);

            if ($dbh->lastInsertID()) {
                $validationAddAuteur = "L'ajout a bien etais effectuer !";
            }
        }
    }

    if (isset($_POST['add_citation'])) {
        $error = [];
        if (empty($_POST['choix_auteur'])) {
            $error['choix_auteur'] = "Veuillez choisir le philosophe a qui appartient la citation à enregistrer.";
        }
        if (empty($_POST['citation']) || strlen($_POST['citation']) <= 5) {
            $error['citation'] = "Veuillez renseigner la citation à enregistrer.";
        }
        if (empty($_POST['date_citation'])) {
            $error['date_citation'] = "Veuillez renseigner une date de parution.";
        }
        if (empty($_POST['explication'])) {
            $error['explication'] = "Veuillez renseigner une explication.";
        }

        if (empty($error)) {
            $auteur = htmlspecialchars($_POST['choix_auteur']);
            $citation = htmlspecialchars($_POST['citation']);
            $explication = htmlspecialchars($_POST['explication']);
            $date = htmlspecialchars($_POST['date_citation']);


            $requete = $dbh->prepare("SELECT id_auteur FROM auteur WHERE nom = :nom");
            $requete->execute([
                'nom' => $auteur
            ]);
            $resultat_id_auteur = $requete->fetch();
            $id_auteur = $resultat_id_auteur['id_auteur'];

            $requete_add = $dbh->prepare("INSERT INTO citations (citation, explication, année, id_auteur) VALUES (:citation, :explication, :annee, :id_auteur)");
            $requete_add->execute([
                'citation' => ucfirst($citation),
                'explication' => ucfirst($explication),
                'annee' => $date,
                'id_auteur' => $id_auteur
            ]);

            // $requete_add->debugDumpParams(); exit;
        }
    }

    if (isset($_POST['update_citation'])) {
        $error = [];
        if (empty($_POST['select_auteur'])) {
            $error['select_auteur'] = "Veuillez renseigner un philosophe";
        }
        if (empty($_POST['select_citation'])) {
            $error['select_citation'] = "Veuillez renseigner une citation";
        }
    }
}
