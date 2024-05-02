<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="assets/img/logo/Logo mini.png">
    <title><?= $title ?? '' ?></title>
    <!-- Connexion a CSS, n'oublions pas que la racin est la page inde.php qui ce trouve dans le dossier Public. -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
    <!-- Connexion a bootstrap -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..<link rel=" stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body style="background: linear-gradient(180deg, rgba(33,37,41,1) 10%, rgba(33,37,41,1) 16%, rgba(194,194,194,1) 100%); height: 100%; padding-top: 80px; margin-bottom: 110px">
    <nav class=" navbar navbar-expand-lg fixed-top bg-dark">
        <img src="assets/img/logo/Logo" width="80" height="40" class="d-inline-block align-top border-secondary rounded mx-2" alt="">
        <div class="container-fluid">
            <?php if (empty($_GET) || $_GET == 'index') : ?>
                <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                    <a class="navbar-brand text-white ml-4">Well, hello <?= htmlspecialchars_decode($_SESSION['name']) ?></a>
                <?php endif ?>
                <?php if (!isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                    <a class="navbar-brand text-white">Well, hello buddy</a>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (!isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <a class="mx-3 mt-3 text-decoration-none blockquote-footer" href="?page=inscription">Crée-toi un compte pour enregistrer tes citations favorites et bien plus !</a>
            <?php endif ?>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3" aria-current="page" href="?page=index"><i>Accueil</i></a>
                    <a class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3" href="?page=citations"><i>Les citations</i></a>
                    <a class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3" href="?page=auteurs"><i>Les philosophes</i></a>
                    <?php if (!isset($_SESSION['user_id'])) : ?>
                        <a href="?page=inscription" id="hover" class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3"><i>Inscription</i></a>
                        <a href="?page=connexion" id="hover" class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3"><i>Connexion</i></a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3" href="?page=compte"><i>Mon compte</i></a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['id_droit']) && $_SESSION['id_droit'] == 1) : ?>
                        <a class="btn btn-outline-primary border-top-0 border-end-0 text-light mx-3" href="?page=admin"><i>Administrateur</i></a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="btn btn-outline-primary border-top-0 border-end-0 text-danger mx-3" href="?page=deconnexion"><i>Déconnexion</i></a>
                    <?php endif ?>
                </div>
            </div>
            <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <img src="<?= $_SESSION['img'] ?>" width="75" height="75" class="d-inline-block align-top border-bottom border-left rounded mx-2" alt="">
            <?php endif ?>
        </div>
    </nav>

    <div>

        <?php require "$page.html.php" ?> <!-- Ici nous faisont un appel au nom de la page contenu dans $_GET en y ajoutant le .html afin de récupérer uniquement le fichier qui s'occupe de l'affichage. -->

    </div>



</body>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>