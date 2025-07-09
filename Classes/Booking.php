<?php
include 'db.php'; // Include your database connection

class Booking {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createBooking($customer_id, $event_id, $ticket_id, $status = 'Pending') {
        $stmt = $this->conn->prepare("INSERT INTO booking (B_DATE, STATUS, CUSTOMER_ID, EVENT_ID, TIC_ID) VALUES (?, ?, ?, ?, ?)");
        $date = date('Y-m-d'); // Today's date
        $stmt->bind_param("ssiii", $date, $status, $customer_id, $event_id, $ticket_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return $this->conn->insert_id; // Return booking ID
        } else {
            return false;
        }
    }
}
?>
