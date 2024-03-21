<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? '' ?></title>
    <!-- Connexion ua CSS, n'oublions pas que la racin est la page inde.php qui ce trouve dans le dossier Public. -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Connexion a bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <a class="navbar-brand">Well, hello <?= $_SESSION['name'] ?></a>
            <?php endif ?>
            <?php if (!isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <a class="navbar-brand">Well, hello buddy</a>
            <?php endif ?>

            <?php if (isset($_SESSION['user_id'])) : ?> <!-- Si la session contient un user_id -->
                <img src="<?= $_SESSION['img'] ?>" width="50" height="50" class="d-inline-block align-top border border-dark rounded mx-2" alt="">
            <?php endif ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active mx-1" aria-current="page" href="?page=index">Acceuil</a>
                    <a class="nav-link mx-1" href="?page=citations">Les citations</a>
                    <a class="nav-link mx-1" href="?page=auteurs">Les philosophes</a>
                    <?php if (!isset($_SESSION['user_id'])) : ?>
                        <a href="?page=inscription" id="hover" class="nav-link">Inscription</a>
                        <a href="?page=connexion" id="hover" class="nav-link">Connexion</a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="nav-link mx-1" href="?page=compte">Mon compte</a>
                    <?php endif ?>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a class="nav-link mx-1" href="?page=deconnexion">Déconnexion</a>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </nav>



    <main>
        <?php require "$page.html.php" ?> <!-- Ici nous faisont un appel au nom de la page contenu dans $_GET en y ajoutant le .html afin de récupérer uniquement le fichier qui s'occupe de l'affichage. -->
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>