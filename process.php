<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $reason = $_POST["reason"];
    $message = $_POST["message"];

    $to = "mccanlasj@gmail.com";
    $subject = "Contact Form Submission - " . $reason;
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
