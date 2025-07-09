<?php
// edit_booking.php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
require_once('db.php');


// Check if the booking ID is provided via GET parameter
if (isset($_GET['id'])) {
    $bookingId = $_GET['id'];

    
    $query = "SELECT * FROM BOOKING WHERE B_ID = $bookingId";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $booking = $result->fetch_assoc();
?>
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Edit Booking</title>
            <!-- Include Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container">
                <br><br><br>
                <h2>Edit Booking</h2>
                <br><br>
                <form action="updateBooking.php" method="POST">
                    <input type="hidden" name="booking_id" value="<?php echo $booking['B_ID']; ?>">
                    <div class="mb-3">
                        <label for="ticket_id" class="form-label">Ticket ID:</label>
                        <input type="text" class="form-control" id="ticket_id" name="ticket_id" value="<?php echo $booking['TIC_ID']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="customer_id" class="form-label">Customer ID:</label>
                        <input type="text" class="form-control" id="customer_id" name="customer_id" value="<?php echo $booking['CUSTOMER_ID']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status:</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $booking['STATUS']; ?>">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </body>
        </html>
<?php
    } else {
        echo "Booking not found.";
    }

    // Free the result set
    $result->free();
} else {
    echo "Booking ID not provided.";
}

// Close the database connection
$conn->close();
?>
