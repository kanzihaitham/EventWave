<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('functions/db.php'); // Include the database connection

// Fetching events from the database
$query = "SELECT * FROM EVENT_";  // Make sure the table name matches exactly
$result = $conn->query($query);

if (!$result) {
    die("SQL error: " . $conn->error);  // Error handling if the query fails
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes/bootstrap.min.css" />
    <link rel="stylesheet" href="includes/groupStyle.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="includes/ADMINstyle.css" />
    <title>EventWave</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
<?php include "includes/components/headeradmin.php"; ?>
<body>
<div class="container mt-5">
    <h1>Events</h1>

    <!-- Event Table -->
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Added By</th>
                <th>Organizer ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['E_ID']); ?></td>
                        <td><?= htmlspecialchars($row['NAME']); ?></td>
                        <td><?= htmlspecialchars($row['date_']); ?></td>
                        <td><?= htmlspecialchars($row['CATEGORY']); ?></td>
                        <td><?= htmlspecialchars($row['ADDED_BY']); ?></td>
                        <td><?= htmlspecialchars($row['ORG_ID']); ?></td>
                        <td>
                        <a href="functions/update_event.php?e_id=<?= htmlspecialchars($row['E_ID']); ?>" class="btn btn-primary">Update</a>
                        <a href="functions/delete_event.php?e_id=<?= htmlspecialchars($row['E_ID']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?');">Delete</a>

                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="7">No events found</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="functions/add_event.php" class="btn btn-success">Add New Event</a>
</div>
</body>


 <!-- Bootstrap JavaScript Libraries -->
 <script>
            $("#navDropdown").click(function (){ 
              $("#navdropdownContent").toggleClass("hide");
            });
         </script>
</html>
