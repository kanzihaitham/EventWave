<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
require_once('db.php');


// Check if the form data is received via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $bookingDate = $_POST['bookingDate'] ?? '';
    $ticketId = $_POST['ticketId'] ?? '';
    $customerId = $_POST['customerId'] ?? '';
    $eventId = $_POST['eventId'] ?? '';

    // Validate and ensure required fields are not empty
    if (empty($bookingDate) || empty($ticketId) || empty($customerId) || empty($eventId)) {
        http_response_code(400); // Bad request
        echo "All fields are required.";
        exit;
    }

    // Prepare SQL statement to insert a new booking
    $query = "INSERT INTO BOOKING (B_DATE, TIC_ID, CUSTOMER_ID, EVENT_ID, STATUS) VALUES (?, ?, ?, ?, 'Confirmed')";

    // Prepare and bind parameters
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        http_response_code(500); // Internal server error
        echo "Preparation failed: " . $conn->error;
        exit;
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param("ssii", $bookingDate, $ticketId, $customerId, $eventId);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Booking insertion successful
        echo "Booking added successfully!";
    } else {
        // Booking insertion failed
        http_response_code(500); // Internal server error
        echo "Execution failed: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
    // Close the database connection
    $conn->close();
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method.";
}
?>
