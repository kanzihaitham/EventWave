<?php
include 'db.php';
include 'Booking.php';
include 'Payment.php';

// Get database connection
$db = new Database();
$conn = $db->connect();

// Create instances of the booking and payment classes
$booking = new Booking($conn);
$payment = new Payment($conn);

// Example data (this would usually come from a form)
$customer_id = 1;
$event_id = 101;
$ticket_id = 501;
$card_num = '1234567890123456';
$cardholder_name = 'John Doe';
$cvv = '123';
$expiry = '2025-12';

// Process the booking
$booking_id = $booking->createBooking($customer_id, $event_id, $ticket_id);
if ($booking_id) {
    echo "Booking successfully created with ID: $booking_id\n";
    // Process the payment
    $payment_id = $payment->createPayment($customer_id, $card_num, $cardholder_name, $cvv, $expiry);
    if ($payment_id) {
        echo "Payment successfully processed with ID: $payment_id";
    } else {
        echo "Failed to process payment";
    }
} else {
    echo "Failed to create booking";
}
?>
