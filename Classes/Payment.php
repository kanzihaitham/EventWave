<?php
include 'db.php'; 

class Payment {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createPayment($cust_id, $card_num, $ch_name, $cvv, $expiry) {
        $stmt = $this->conn->prepare("INSERT INTO payment (CARD_NUM, CH_NAME, CVV, expiry, CUST_ID) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $card_num, $ch_name, $cvv, $expiry, $cust_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return $this->conn->insert_id; // Return payment ID
        } else {
            return false;
        }
    }
}
?>
