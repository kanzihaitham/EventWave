<?php

require_once 'db.php';



// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $cardNumber = $_POST['cardNumber'];
    $cardHolderName = $_POST['cardHolderName'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    // Example: Assuming you have a Customer ID (replace this with your logic)
    $customerId = 1; // Placeholder for customer ID; replace with your logic to get customer ID

    // Create a new instance of the Payment class (assuming Payment class is defined)
    $payment = new Payment($conn); // Assuming $conn is your existing database connection

    // Process payment (assuming your Payment class has a method to handle payment creation)
    $payment_id = $payment->createPayment($customerId, $cardNumber, $cardHolderName, $cvv, $expiryDate);

    // Check if payment was successfully processed
    if ($payment_id) {
        echo "Payment successful!";
        // Redirect to a success page or perform other actions
        // Example: header("Location: payment_success.php");
    } else {
        echo "Payment failed!";
        // Redirect to a failure page or perform other actions
        // Example: header("Location: payment_failed.php");
    }
}
?>
