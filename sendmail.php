<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "anis.rahmani095@gmail.com";
    $subject = "New Form Submission from $fullname";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>