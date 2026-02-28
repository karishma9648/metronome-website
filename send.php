<?php

include 'db.php';

// PHPMailer include
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);

// FORM DATA
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


//  DATABASE INSERT
$sql = "INSERT INTO contact(name, email, message) 
        VALUES ('$name', '$email', '$message')";

mysqli_query($conn, $sql);


// SMTP MAIL
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'singhkarishma9656@gmail.com';
    $mail->Password = 'karishma9656';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('singhkarishma9656@gmail.com', 'Website Contact');
    $mail->addAddress('singhkarishma9656@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = "New Contact Message";

    $mail->Body = "
        <h3>New Message</h3>
        Name: $name <br>
        Email: $email <br>
        Message: $message
    ";

    $mail->send();

    echo " Message Sent & Saved Successfully";

} catch (Exception $e) {
    echo "Mail Error: {$mail->ErrorInfo}";
}