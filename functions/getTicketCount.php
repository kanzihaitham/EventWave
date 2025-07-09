<?php

require_once('db.php');

//count bookings for Event ID = 1
$query = "SELECT COUNT(*) AS ticket_count FROM BOOKING WHERE EVENT_ID = 1";

// Execute the query
$result = $conn->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $ticketCount = $row['ticket_count'];
    echo $ticketCount;
} else {
    echo "0"; // If no bookings found or query fails, return 0
}

$conn->close();
?>

