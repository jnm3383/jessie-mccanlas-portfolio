<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "your-email@example.com"; // Replace with your email address
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    http_response_code(200); // Success
} else {
    http_response_code(400); // Bad Request
}
?>
