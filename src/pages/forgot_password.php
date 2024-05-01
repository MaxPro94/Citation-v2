<?php
$title = "Mot de passe oublié";
if (isset($_POST['submit_forgot_password'])) {
    $error = [];
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Veuillez renseigner un e-mail au bon format.";
    }

    if (empty($error)) {
        $mail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        $requete_verif_mail = $dbh->prepare("SELECT COUNT(*) FROM utilisateur WHERE mail = :mail");
        $requete_verif_mail->execute([
            'mail' => $mail
        ]);
        $resultat_verif = $requete_verif_mail->fetch();

        if ($resultat_verif > 0) {
            $newPassword = "";
            $Maj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
            $min = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
            $specialChars = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "=", "{", "}", "[", "]", "|", "\\", ":", ";", "\"", "'", "<", ">", ",", ".", "?", "/"];

            $caractères = array_merge($Maj, $min, $specialChars);

            for ($i = 0; $i <= 5; $i++) {
                shuffle($caractères);
                $newPassword .= $caractères[array_rand($Maj, 1)];
                $newPassword .= $caractères[array_rand($min, 1)];
                $newPassword .= $caractères[array_rand($specialChars, 1)];
            }

            $salt = "mx1";

            $requete_update = $dbh->prepare("UPDATE utilisateur SET motdepasse = :motdepasse WHERE mail = :mail");
            $requete_update->execute([
                'motdepasse' => password_hash($newPassword . $salt, PASSWORD_BCRYPT),
                'mail' => $mail
            ]);

            $header = "MIME-Version: 1.0\r\n";
            $header .= 'From:"Meta-Mindset.com"<support@metamindset.com>' . "\n";
            $header .= 'Content-type: text/html; charset="utf-8"' . "\n";
            $header .= 'Content-Transfer-Encoding: 8bit';

            $message = "
                <html>
                    <body style=\"font-family: 'Roboto', sans-serif; background-color: #212529; margin: 0; padding: 0;\">
                    <h1 style=\"color: #cd922d; text-align: center; padding: 10px; background-color: #212529;\">Meta Mindset</h1>
                    <hr style=\"margin-left: 50px; margin-right: 50px;\">
                    <h3 style=\"color: #f8f9fa; text-align: center; padding: 10px; background-color: #212529;\">Voici ton nouveau mot de passe :</h3>
                    <table style=\"width: 100%; max-width: 600px; margin: 20px auto; border: 2px solid #cd922d; border-radius: 8px;\">
                        <thead>
                            <tr>
                                <th style=\"font-size: 22px; color: #f8f9fa; text-align: center; padding: 10px; background-color: #212529;\">$newPassword</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <p style=\"color: #cd922d; background-color: #212529; font-size: 12px; padding: 10px; text-align: center;\">Vous pouvez modifier votre mot de passe sur votre page de compte.</p>
                            </tr>
                        </tbody>
                    </table>
                    <hr style=\"margin-left: 100px; margin-right: 100px; margin-top: 10px; margin-bottom: 20px\">
                    </body>
                </html>
                ";

            if (mail($mail, "Changement de mot de passe", $message, $header)) {
                $validationEmail = "Un e-mail de vous à ete envoyer";
            } else {
                $error['mail_confirm'] = "Un problème est survenue lors de l'envoi du mail.";
            }
        } else {
            $error['email'] = "Une erreur c'est produit pendant l'envoi de l'email.";
        }
    }
}
