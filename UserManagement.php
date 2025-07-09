$<!doctype html>
<?php  include "functions/db.php" ;

?>

<html lang="en">
    <head>
        <title>Event Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!--custom css file-->
        <link rel="stylesheet" href="includes/adminEvents.css">
        <link rel="stylesheet" href="includes/style dash.css">
        <!--kanzy nav links-->
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css />
        <link rel="stylesheet" href=https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css />
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link
         rel="stylesheet"
          href=https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css
        />
    </head>

    <body>
        
        <?php include "includes/components/headeradmin.php"; ?>

        <div class="container mt-5">
            <h2>View Users</h2>
            <!-- <button type="button" class="btn btn-success mb-3">Add New User</button> -->
            <table class="table table-bordered mt-4">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>username</th>
                  <!-- <th>password</th> -->
                  <th>Email</th>
                  <th>Date Of Birth</th>
                  <th>Delete User</th>
                </tr>

                <?php
                include "functions/db.php";
                //current bid , primary image , current price count bidders , 
                $sql = "SELECT * FROM customer ";
                $result = $conn->query($sql); 
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo ' <tr>
                        <td>'.$row["c_id"].'</td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["email"].'</td>
                        <td>'.$row["dob"].'</td>
                        <td><a class="btn btn-danger" href="functions/deleteUser.php?u='.$row["c_id"].'">Delete User</a></td>
                      </tr>';
                    }
                }
            ?>
  
</table>
            
          </div>
          
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script>
  $("#navDropdown").click(function (){ 
    $("#navdropdownContent").toggleClass("hide");
  });
          </script>
          
          </body>
          </html>


    