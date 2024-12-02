<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
// Yêu cầu các tệp cần thiết từ PHPMailer
require 'D:\xampp\htdocs\DuAn1\PHPMailer-master\src\Exception.php';
require 'D:\xampp\htdocs\DuAn1\PHPMailer-master\src\PHPMailer.php';
require 'D:\xampp\htdocs\DuAn1\PHPMailer-master\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function senmail($cont, $sub, $email, $name) {
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sweetcakes2910@gmail.com'; // Change this to your email
        $mail->Password   = 'xgux bynz qldl emrt'; // Change this to your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('sweetcakes2910@gmail.com','sweetcakes'); // Recipient

        $mail->Subject = $sub;
        $mail->Body    = $cont;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}