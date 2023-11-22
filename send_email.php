<?php

// Retrieve the form values
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Include the PHPMailer library
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
// Create a new PHPMailer object
$mail = new PHPMailer();

// Configure the server settings
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'your_username';
$mail->Password = 'your_password';

// Set the sender, recipient, subject, and message content
$mail->setFrom('sender@example.com', 'Your Name');
$mail->addAddress('anis.rahmani095@gmail.com', 'Anis Rahmani');
$mail->Subject = 'Message from your website';
$mail->Body = "Full name: $fullname\nEmail address: $email\nMessage: $message";

// Send the email
if ($mail->send()) {
    echo "Email sent successfully";
} else {
    echo "Failed to send email: " . $mail->ErrorInfo;
}