<?php

if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}

$path = "../src/pages/$page.php";
if (file_exists($path)) {
    require '../src/data/db-connect.php';
    require $path;
    require '../templates/layout.html.php';
}
