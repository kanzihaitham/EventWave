<?php
require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields";
    } else {
        
        $to = "email@example.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        
        if (mail($to, $subject, $body)) {
            echo "Thank you! Your message has been sent.";
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
}
?>