<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="assets/img/logo/MetaMind144">
    <title><?= $title ?? '' ?></title>
    <!-- Connexion a CSS, n'oublions pas que la racin est la page inde.php qui ce trouve dans le dossier Public. -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Connexion a bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..<link rel=" stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body class="background: linear-gradient(180deg, rgba(33,37,41,1) 10%, rgba(33,37,41,1) 16%, rgba(194,194,194,1) 100%); height: 100%">
    <nav class=" navbar navbar-expand-lg bg-dark">
        <img src="assets/img/logo/MetaMind144" width="80" height="80" class="d-inline-block align-top border-secondary rounded mx-2" alt="">
        <div class="container-fluid">
            <?php if (empty($_GET) || $_GET == 'index') : ?>
                <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                    <a class="navbar-brand text-white ml-4">Well, hello <?= $_SESSION['name'] ?></a>
                <?php endif ?>
                <?php if (!isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                    <a class="navbar-brand text-white">Well, hello buddy</a>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (!isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <a class="mx-5 nav-link text-secondary" href="?page=connexion">Crée-toi un compte pour enregistrer tes citations favorites et bien plus !</a>
            <?php endif ?>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-outline-warning mx-2" aria-current="page" href="?page=index">Acceuil</a>
                    <a class="btn btn-outline-warning mx-2" href="?page=citations">Les citations</a>
                    <a class="btn btn-outline-warning mx-2" href="?page=auteurs">Les philosophes</a>
                    <?php if (!isset($_SESSION['user_id'])) : ?>
                        <a href="?page=inscription" id="hover" class="btn btn-outline-warning mx-2">Inscription</a>
                        <a href="?page=connexion" id="hover" class="btn btn-outline-warning mx-2">Connexion</a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="btn btn-outline-warning mx-2" href="?page=compte">Mon compte</a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['id_droit']) && $_SESSION['id_droit'] == 1) : ?>
                        <a class="btn btn-outline-warning mx-2" href="?page=ajout_citation">Ajouter une citation</a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="btn btn-outline-danger mx-2 text-warning" href="?page=deconnexion">Déconnexion</a>
                    <?php endif ?>
                </div>
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <img src="<?= $_SESSION['img'] ?>" width="75" height="75" class="d-inline-block align-top border-secondary rounded mx-2" alt="">
            <?php endif ?>
        </div>
    </nav>




    <div>

        <?php require "$page.html.php" ?> <!-- Ici nous faisont un appel au nom de la page contenu dans $_GET en y ajoutant le .html afin de récupérer uniquement le fichier qui s'occupe de l'affichage. -->

    </div>



</body>
<script src="bootstrap/dist/js/bootstrap.js"></script>

</html>