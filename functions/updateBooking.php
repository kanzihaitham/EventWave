<?php
// update_booking.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
require_once('db.php');


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingId = $_POST['booking_id'];
    $ticketId = $_POST['ticket_id'];
    $customerId = $_POST['customer_id'];
    $status = $_POST['status'];

    // Prepare SQL statement to update booking details
    $query = "UPDATE BOOKING SET TIC_ID = '$ticketId', CUSTOMER_ID = '$customerId', STATUS = '$status' WHERE B_ID = $bookingId";

    // Execute the update query
    if ($conn->query($query) === TRUE) {
        // Redirect back to the adminEvents.php page after successful update
        header('Location: ../adminEvents.php');
        exit();
    } else {
        // Handle update error
        echo "Error updating record: " . $conn->error;
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
