<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../core/read.php';
require_once '../core/conn.php';
require_once '../core/create.php';
require_once '../PHPMailer/Exception.php';
require_once '../PHPMailer/PHPMailer.php';
require_once '../PHPMailer/SMTP.php';

$adresse_exp =$_GET['mail'];
$sujet = $_GET['sujet'];
$message = $_GET['message'];

$mail = new PHPMailer(true);

// config
$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Je veux des info de debug

// config du SMTP
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->Port = 1025;

//charset
$mail->CharSet = "utf-8";

//Destinataire
$mail->addAddress('Hacker-poulette-support@site.com');

//expéditeur
$mail->setFrom($adresse_exp);

//contenu
$mail->Subject = $sujet;
$mail->Body = $message;

//on envoie
$mail->send();
echo "message envoyé";
