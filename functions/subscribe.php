<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $query = "INSERT INTO NEWSLETTER (SUB_ID, EMAIL) values (NULL, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);

   
    if ($stmt->execute()) {
        // Subscription successful - redirect back to index.php with success message
       header('Location: index.php?subscribe=success');
       exit();
    } else {
        // Subscription failed - redirect back to index.php with error message
        header('Location: index.php?subscribe=error');
        exit();
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Invalid request - redirect back to index.php
    header('Location: index.php');
    exit();
}
?>