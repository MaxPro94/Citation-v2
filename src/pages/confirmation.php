<?php
$error = [];
if(empty($_GET['mail'])){
    $error['mail'] = "Aucun mail a confirmer";
}


if(empty($_GET['key']) || !is_numeric($_GET['key'])){
    $error['key'] = "Veuillez renseigner une clef au bon format";
}

if(empty($error)){
    $mail = $_GET['mail'];
    $key = intval($_GET['key']); // intval = Convertir en int
    $requete_verif_confirmation = $dbh->prepare("SELECT * FROM utilisateur WHERE mail = :mail AND confirmKey = :confirmKey");
    $requete_verif_confirmation->execute([
    'mail' => $mail,
    'confirmKey' => $key
    ]);

    $userexist = $requete_verif_confirmation->rowCount(); // On verifie que l'utilisateur existe bien en comptant les lignes recupérer.

    if($userexist == 1){
        $user = $requete_verif_confirmation->fetch();
        if($user['confirm'] == 0){
            $requete_confirmation = $dbh->prepare("UPDATE utilisateur SET confirm = :confirm WHERE mail = :mail AND confirmKey = :confirmKey");
            $requete_confirmation->execute([
                'confirm' => 1,
                'mail' => $mail,
                'confirmKey' => $key
            ]);
            $validationConfirm = "Votre compte a bien été verifier !";

        } else {
            $error['already_confirm'] = "Cette adresse a déjà etais confirmer.";
        }

    } else {
        $error['user'] = "Aucun utilisateur trouver avec cette adresse e-mail";
    }
}
