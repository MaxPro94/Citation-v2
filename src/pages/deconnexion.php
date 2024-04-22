<?php

session_start();
if (isset($_SESSION['user_id'])) {

    
    unset($_SESSION['user_id']);
    setcookie('PHPSESSID', '', time() - 1000);

    header('Location: ?page=connexion');
} else {
    header('Location: ?page=connexion');
}
