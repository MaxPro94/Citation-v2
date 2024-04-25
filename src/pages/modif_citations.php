<?php
$title = "Les citations";
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['id_droit'] == 1) {
        $requete_auteurs = $dbh->query("SELECT * FROM auteur");
        $resultats_auteurs = $requete_auteurs->fetchAll();
    }
    // Ajout d'une citation.
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

            if ($dbh->lastInsertID()) {
                $validationAddCitation = "L'ajout de la citation à bien etais effectuer.";
            } else {
                $error['addCita'] = "Un problème est survenu lors de l'enregistrement de la citation.";
            }

            // $requete_add->debugDumpParams(); exit;
        }
    }

    // Modification d'un citation.
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

    // Suppression d'une citation.
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
