<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../PHPMailer/Exception.php';
require_once '../PHPMailer/PHPMailer.php';
require_once '../PHPMailer/SMTP.php';


$mail = new PHPMailer(true);
try{

    // config
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Je veux des info de debug

    // config du SMTP
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 1025;
    
//charset
$mail->CharSet = "utf-8";

//Destinataire
$mail->addAddress('exemple@site.fr');

//expéditeur
$mail->setFrom('no-reply@site.fr');

//contenu
$mail->Subject = "Sujet du message";
$mail->Body = "message";

//on envoie
$mail->send();
echo "message envoyé";
} catch(Exception){
    echo 'Message non envoyé';
}

