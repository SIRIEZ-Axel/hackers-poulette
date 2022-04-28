<?php
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$genre = $_GET['genre'];
$pays = $_GET['pays'];
$mail = $_GET['mail'];
$sujet = $_GET['sujet'];
$message = $_GET['message'];

header('location:read.php');
?>