<?php
include 'Payment.php'; // Assuming you have a Payment class that handles the database logic

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $cardNumber = $_POST['cardNumber'];
    $cardHolderName = $_POST['cardHolderName'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    // Instance of Payment class
    $db = new Database();
    $conn = $db->connect();
    $payment = new Payment($conn);

    // Process payment (placeholder function)
    $payment_id = $payment->createPayment($cust_id, $cardNumber, $cardHolderName, $cvv, $expiryDate);
    
    if ($payment_id) {
        echo "Payment successful!";
    } else {
        echo "Payment failed!";
    }
}
?>
