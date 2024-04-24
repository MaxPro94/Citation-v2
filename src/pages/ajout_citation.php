<?php
$title = "Actions BDD";
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
                $validationAuteur = "L'ajout a bien etais effectuer !";
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

            $requete_add = $dbh->prepare("INSERT INTO citations (citation, explication, annee, id_auteur) VALUES (:citation, :explication, :annee, :id_auteur)");
            $requete_add->execute([
                'citation' => ucfirst($citation),
                'explication' => ucfirst($explication),
                'annee' => $date,
                'id_auteur' => $id_auteur
            ]);

            // $requete_add->debugDumpParams(); exit;
        }
    }

    if (isset($_POST['submit_update_citation'])) {
        $error = [];

        if (empty($_POST['update_citation']) || !is_string($_POST['update_citation'])  || strlen($_POST['update_explication']) <= 5) {
            $error['update_citation'] = "Veuillez renseigner une citation.";
        }

        if (empty($_POST['update_explication']) || !is_string($_POST['update_explication']) || strlen($_POST['update_explication']) <= 15) {
            $error['update_explication'] = "Veuillez renseigner une explication.";
        }

        if (empty($_POST['update_IDauteur']) || !is_numeric($_POST['update_IDauteur'])) {
            $error['update_IDauteur'] = "Veuillez renseigner un ID auteur correct.";
        }

        if (!empty($_POST['update_annee'])) {
            if (!is_numeric($_POST['update_annee'])) {
                $error['update_annee'] = "Veuillez renseigner une Année au bon format.";
            }
        }

        if (empty($_POST['id_citation']) || !is_numeric($_POST['id_citation'])) {
            $error['id_citation'] = "Veuillez renseigner une Année au bon format.";
        }

        if (empty($error)) {

            $citation = ucfirst(trim(htmlspecialchars($_POST['update_citation'])));
            $explication = ucfirst(trim(htmlspecialchars($_POST['update_explication'])));
            $annee = htmlspecialchars($_POST['update_annee']);
            $IDauteur = htmlspecialchars($_POST['update_IDauteur']);
            $IDcitation = htmlspecialchars($_POST['id_citation']);


            $requete_update = $dbh->prepare("UPDATE citations SET citation = :citation, explication = :explication, annee = :annee, id_auteur = :id_auteur WHERE id_citations = :IDcitation");
            $requete_update->execute([
                'citation' => $citation,
                'explication' => $explication,
                'annee' => $annee,
                'id_auteur' => $IDauteur,
                'IDcitation' => $IDcitation
            ]);

            $validationUpdateCitation = "L'update de la citation numéro : $IDcitation, à bien été effectuer.";
        }
    }

    if (isset($_POST['submit_update_auteur'])) {
        $error = [];
        if (empty($_POST['select_update_auteur']) || !is_numeric($_POST['select_update_auteur'])) {
            $error['select_update_auteur'] = "Veuillez renseigner un philosophe.";
        }
        if (empty($_POST['update_lastname_auteur']) || strlen(trim($_POST['update_lastname_auteur'])) <= 2) {
            $error['update_lastname_auteur'] = "Veuillez renseigner un nom de plus de 2 caractères.";
        }
        if (empty($_POST['update_firstname_auteur'])  || strlen(trim($_POST['update_firstname_auteur'])) <= 2) {
            $error['update_firstname_auteur'] = "Veuillez renseigner un prénom de plus de deux caractères.";
        }
        if (empty($_POST['update_naissance_auteur']) || !is_numeric($_POST['update_naissance_auteur'])) {
            $error['update_naissance_auteur'] = "Veuillez renseigner une année de naissance.";
        }
        if (!empty($_POST['update_deces_auteur']) && !is_numeric($_POST['update_deces_auteur'])) {
            $error['update_deces_auteur'] = "Veuillez renseigner une année de décés au bon format";
        }
        if (empty($_POST['update_picture_auteur'])) {
            $error['update_picture_auteur'] = "Veuillez renseigner une photo/image";
        }
        if (empty($_POST['update_description_auteur']) || strlen(trim($_POST['update_description_auteur'])) <= 250) {
            $error['update_description_auteur'] = "Veuillez renseigner une description de l'auteur de plus de 250 caractères.";
        }
        if (empty($_POST['update_biographie_auteur']) || strlen(trim($_POST['update_biographie_auteur'])) <= 400) {
            $error['update_biographie_auteur'] = "Veuillez renseigner une biographie de l'auteur de plus de 400 caractères.";
        }

        $idAuteur = htmlspecialchars($_POST['select_update_auteur']);
        $lastname = htmlspecialchars($_POST['update_lastname_auteur']);
        $firstname = htmlspecialchars($_POST['update_firstname_auteur']);
        $naissance = htmlspecialchars($_POST['update_naissance_auteur']);
        $picture = htmlspecialchars($_POST['update_picture_auteur']);
        $description = htmlspecialchars($_POST['update_description_auteur']);
        $biographie = htmlspecialchars($_POST['update_biographie_auteur']);

        if (empty($error)) {
            $deces = htmlspecialchars($_POST['update_deces_auteur']);

            $requete_update_auteur = $dbh->prepare("UPDATE auteur SET nom = :nom, prenom = :prenom, description = :description, biographie = :biographie, date_start = :date_start, date_end = :date_end, photo = :photo WHERE id_auteur = :id_auteur");
            $requete_update_auteur->execute([
                'nom' => ucfirst($lastname),
                'prenom' => ucfirst($firstname),
                'date_start' => $naissance,
                'date_end' => $deces,
                'description' => ucfirst($description),
                'biographie' => ucfirst($biographie),
                'id_auteur' => $idAuteur,
                'photo' => $picture
            ]);
        }
    }

    if (isset($_POST['delete_citation'])) {
        $error = [];
        if (empty($_POST['select_cita'])) {
            $error['ID'] = "Veuillez renseigner une citation a supprimer";
        }

        if (empty($error)) {
            $requete_delete_citation = $dbh->prepare("DELETE FROM citations WHERE id_citations = :id_citations");
            $requete_delete_citation->execute([
                'id_citations' => $_POST['select_cita']
            ]);

            $requete_validation_delete = $dbh->prepare("SELECT COUNT() FROM citations WHERE id_citations = :id_citations");
            $requete_validation_delete->execute([
                'id_citations' => $_POST['select_cita']
            ]);
            $resultat = $requete_validation_delete->fetch();
            if ($resultat['COUNT'] != 0) {
                $error['delete'] = "Un problème est survenue lors de la suppression.";
            } else {
                $error['delete_ok'] = "La suppression à bien etais effectuer.";
            }
        }
    }
}
