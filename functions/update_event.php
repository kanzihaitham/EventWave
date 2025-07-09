<?php

require_once('db.php');  // Ensure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['e_id'])) {
    // Extract and sanitize input
    $e_id = $_POST['e_id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $added_by = $_POST['added_by'];
    $org_id = $_POST['org_id'];

    // Prepare the SQL update statement
    $stmt = $conn->prepare("UPDATE EVENT_ SET NAME = ?, date_ = ?, CATEGORY = ?, ADDED_BY = ?, ORG_ID = ? WHERE E_ID = ?");
    $stmt->bind_param("sssiii", $name, $date, $category, $added_by, $org_id, $e_id);
    if ($stmt->execute()) {
        echo "<p>Event updated successfully.</p>";
    } else {
        echo "<p>Error updating event: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $conn->close();
} else if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['e_id'])) {
    // Fetch event details for editing
    $e_id = $_GET['e_id'];
    $stmt = $conn->prepare("SELECT * FROM EVENT_ WHERE E_ID = ?");
    $stmt->bind_param("i", $e_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();

    if (!$event) {
        die('Event not found');
    }
    $stmt->close();
    $conn->close();
} else {
    die('Event ID is required');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Update Event</h2>
    <form action="update_event.php" method="post" class="form">
        <input type="hidden" name="e_id" value="<?= htmlspecialchars($event['E_ID']) ?>">

        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" id="name" name="name" required class="form-control" value="<?= htmlspecialchars($event['NAME']) ?>">
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required class="form-control" value="<?= $event['date_'] ?>">
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required class="form-control" value="<?= htmlspecialchars($event['CATEGORY']) ?>">
        </div>

        <div class="form-group">
            <label for="added_by">Added By:</label>
            <input type="number" id="added_by" name="added_by" required class="form-control" value="<?= $event['ADDED_BY'] ?>">
        </div>

        <div class="form-group">
            <label for="org_id">Organizer ID:</label>
            <input type="number" id="org_id" name="org_id" required class="form-control" value="<?= $event['ORG_ID'] ?>">
        </div>

        <button type="submit" class="btn btn-success">Update Event</button>
    </form>
</div>
</body>
</html>

