<?php
// FrontController pour gérer l'affichage des pages
// Il verifie si $_GET['page'] à bien une valeur attribuer
// Il iras chercher notre templates principal (layout.html.php) dans lequel nous ferons un require du templates demander. (compte, index etc..)



if (!empty($_GET['page'])) { // Si $_GET['page'] n'est pas vide
    $page = $_GET['page']; // $page contiendras la valeur appartenant au $_GET['page']
} else {
    $page = 'index'; // Sinon page = templates index donc l'utilisateur serra redirigé vers la page d'acceuil
}

$path = "../src/pages/$page.php"; // $path contient le chemin complet vers la page demander, cela facilite les choses, nous n'auraons plus qu'a renseigner $_GET['page'] avec simplement le nom de la page voulu
if (file_exists($path)) { // Il verifie si le fichier existe bien en utilisant le chemin de $path et le nom de la page avec $page
    require '../src/data/db-connect.php'; // Si il est bien existant, ce connecter a la bdd
    require $path; // Utiliser le chemin $path
    require '../templates/layout.html.php'; // Utiliser le templates général layout dans lequel nous feront un require de la page demander.
} else {
    header('HTTP/1.1 500 No Record Found'); // Si aucune page n'existe, renvoyer l'utilisateur vers une page d'erreur
}

// Il faut bien comprendre que tout arrivera ici, l'index fait un require de tout celon nous avons besoin et l'affiche grace au layout.
// Notre racine devient donc soit la page index.php soit la page api.php selon ce que nous voulons faire (Afficher une page ou bien récupérer des data au format json)

// Afin d'afficher une page, a la place de mettre le chemin direct sur une page html dans un href="../src/pages/compte.php" nous utiliseront simplement cette syntaxe : href="?page=compte"
// Cette page s'occuperas d'aller chercher la page demander en recuperant le nom de la page, en lui rajoutant le chemin, en verifiant si un fichier existe bien à ce nom, et en faisant la connexion a la BDD pour ensuite appeler le templates principal qui contient le header et le footer, dans lequel nous ferons un require du templates desirer qui serra conserver dans la variable $page. 
