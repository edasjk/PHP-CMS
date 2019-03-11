<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'edasjk@gmail.com';
    $mail->Password = 'a238edas';
    $mail->SMPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('edvardas.jovaisas@gmail.com');
    $mail->addAddress('edasjk@gmail.com');
    $mail->Subject = 'A mail sent from PHP';
    $mail->Body = 'Hi from PHP!';

    $mail->send();

    echo 'Message sent';

} catch (Exception $e) {
    echo 'Message not sent: ', $mail->ErrorInfo;
}
