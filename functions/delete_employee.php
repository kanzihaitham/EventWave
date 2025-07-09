<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/db.php'); // Ensuring the path to db.php is correct

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['e_id'])) {
    $e_id = $_POST['e_id'];

    $sql = "DELETE FROM employee WHERE e_id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $e_id);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo "Employee deleted successfully.";
        } else {
            echo "No employee was deleted. Please check the employee ID.";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    $conn->close();
} else {
    echo "No employee ID provided.";
}
?>
