<?php
require_once('db.php'); // Include the database connection

// Check if the necessary ID is set and passed through GET request
if (isset($_GET['e_id'])) {
    $e_id = intval($_GET['e_id']); // Convert to integer for safety

    // Prepare the delete SQL query
    $query = "DELETE FROM EVENT_ WHERE E_ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $e_id);
    $stmt->execute();

    // Check if the deletion was successful
    if ($stmt->affected_rows > 0) {
        // Redirect to the Events page
        header("Location: ../events.php"); // Adjust the path as needed
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // If no ID was provided, display an error or redirect
    echo "Error: No ID provided.";
}
?>
