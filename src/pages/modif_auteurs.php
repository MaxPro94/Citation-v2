<?php
$title = "Les philosophes";
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
            $naissance = $_POST['naissance'];

            if (!empty($mort)) {
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

            if (empty($mort)) {
                $requete = $dbh->prepare("INSERT INTO auteur (nom, prenom, description, biographie, date_start, photo) VALUES (:nom, :prenom, :description, :biographie, :date_start, :photo)");
                $requete->execute([
                    'nom' => htmlspecialchars($name),
                    'prenom' => htmlspecialchars($firstname),
                    'description' => htmlspecialchars($description),
                    'biographie' => htmlspecialchars($biographie),
                    'date_start' => htmlspecialchars($naissance),
                    'photo' => $photo
                ]);

                if ($dbh->lastInsertID()) {
                    $validationAuteur = "L'ajout a bien etais effectuer !";
                }
            }
        }
    }

    // Modification d'un philosophe.
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
        // if (empty($_POST['update_picture_auteur'])) {
        //     $error['update_picture_auteur'] = "Veuillez renseigner une photo/image";
        // }
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
        // $picture = htmlspecialchars($_POST['update_picture_auteur']);
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
                'photo' => null
            ]);

            $validationUpdateAuteur = "La modification à bien etais effectuer.";
        }
    }

    // Suppression d'un philosophe.
    if (isset($_POST['submit_delete_auteur'])) {
        $error = [];
        if (empty($_POST['auteur_to_delete']) || !is_numeric($_POST['auteur_to_delete'])) {
            $error['auteur_to_delete'] = "Veuillez renseigner un auteur a supprimer.";
        }

        if (empty($error)) {
            $requete_delete_auteur = $dbh->prepare("DELETE FROM auteur WHERE id_auteur = :id_auteur");
            $requete_delete_auteur->execute([
                'id_auteur' => $_POST['auteur_to_delete']
            ]);

            $check_delete = $dbh->prepare("SELECT COUNT(id_auteur) FROM auteur WHERE id_auteur = :id_auteur");
            $check_delete->execute([
                'id_auteur' => $_POST['auteur_to_delete']
            ]);
            $check_resultat = $check_delete->fetch();

            if ($check_resultat['COUNT(id_auteur)'] == 0) {
                $validationDeleteAuteur = "La suppression à bien etais effectuer.";
            } else {
                $error['delete_auteur'] = "Une erreur est survenue lors de la suppression du philosophe";
            }
        }
    }
}
