<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address where you want to receive messages
    $to = "info.designkart@gmail.com";

    // Subject for the email
    $subject = "Message From Website: New Contact Form Submission";

    // Compose the message
    $message = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    mail($to, $subject, $message);

    // Redirect back to the contact page after submission
    header("Location: contact.html");
}
?>
