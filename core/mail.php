<?php
require 'conn.php';
require 'create.php';

$to = "axel.siriez@gmail.com";
$mail = $_GET['mail'];
$sujet = $_GET['sujet'];
$message = $_GET['message'];

$message = wordwrap($message, 70, "\r\n");

$headers = [
    "from" => "$mail"
];

mail($to, $sujet, $message, $headers);

header('location:read.php');
