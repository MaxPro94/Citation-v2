<?php
// FrontController pour les récupération de data
// Nous avons du créer un deuxième controller afin de traiter correctement les pages qui irons nou chercher des données au format json comme une api par exemple.
require '../src/data/db-connect.php';

// Si $_GET['action'] n'est pas vide
if (!empty($_GET['action'])) {
    $action = $_GET['action']; // Mettre le $_GET['action'] dans la variable $action

    $path = "../src/actions/$action.php"; // La variable $path contient le chemin vers la page demander
    if (file_exists($path)) { // Si un fichier existe bien avec ce chemin et cette action
        require '../src/data/db-connect.php'; // Demander la connexion a la bdd
        require $path; // Demander le chemin a la page demander

        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data); // On encode le resultat en json afin de pouvoir le lire correctement
    }
} else {
    header('HTTP/1.1 500 No Record Found'); // Si aucune page n'existe au nom demander, renvoyer l'utilisateur vers la page de connexion.
}

// Nous n'utiliseront ce FrontController seulement pour récupérer des data au format json
// index.php ne servira uniquement dans le cas ou nous voudront afficher une page