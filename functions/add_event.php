<?php
require_once('db.php'); // Make sure this path is correct based on your directory structure

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $added_by = $_POST['added_by'];
    $org_id = $_POST['org_id'];

    // Prepare an SQL statement to insert the new event
    $stmt = $conn->prepare("INSERT INTO EVENT_ (NAME, date_, CATEGORY, ADDED_BY, ORG_ID) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii", $name, $date, $category, $added_by, $org_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "New event added successfully.";
    } else {
        echo "Error adding event: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add New Event</h2>
    <form action="/EventWave/functions/add_event.php" method="post" class="form">
        <div class="form-group">
            <label for="name">Event Name:</label>
            <input type="text" id="name" name="name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required class="form-control">
        </div>
        <div class="form-group">
            <label for="added_by">Added By:</label>
            <input type="number" id="added_by" name="added_by" required class="form-control">
        </div>
        <div class="form-group">
            <label for="org_id">Organizer ID:</label>
            <input type="number" id="org_id" name="org_id" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add Event</button>
    </form>
</div>
</body>
</html>