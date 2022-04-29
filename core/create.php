<?php
require 'conn.php';

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$pays = $_GET['pays'];
$genre = $_GET['genre'];
$mail = $_GET['mail'];
$message = $_GET['message'];
$sujet = $_GET['sujet'];


$sql = "INSERT INTO form (nom, prénom, pays, genre, mail, message, sujet) VALUES ('$nom', '$prenom', '$pays', '$genre', '$mail', '$message', '$sujet')";

$dbstatement = $db->prepare($sql);
$dbstatement->execute();

header('Location:read.php');
