<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Replace with your email address
    $to = "cmmuli36@gmail.com";
    $emailsubject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nTelephone: $telephone\nMessage:\n$message";

    // Send the email
    if (mail($to, $emailsubject, $messageBody, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "There was a problem sending the email. Please try again later.";
    }
} else {
    echo "Invalid request method. Please use the form to submit your data.";
}
?>