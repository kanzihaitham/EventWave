<?php
// adminDelete.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
require_once('db.php');


// Check if the booking ID is provided via GET parameter
if (isset($_GET['id'])) {
    $bookingId = $_GET['id'];

    // Prepare SQL statement to delete the booking record
    $query = "DELETE FROM BOOKING WHERE B_ID = $bookingId";

    // Execute the delete query
    if ($conn->query($query) === TRUE) {
        // Redirect back to the adminEvents.php page after successful deletion
        header('Location: ../adminEvents.php');
        exit();
    } else {
        // Handle delete error
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Booking ID not provided.";
}

// Close the database connection
$conn->close();
?>