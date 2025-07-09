<?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);
 require_once('functions/db.php'); // Include the database connection
 

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Kanye Event Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!--custom css file-->
        <link rel="stylesheet" href="/EventWave/includes/adminEvents.css">
        <link rel="stylesheet" href="/EventWave/includes/groupStyle.css">
        <!--kanzy nav links-->
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" />
         <!--icons link-->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
         <!--other icon link-->
         <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link
         rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>.hide{display:none !important;}</style>
    </head>

    <body>
        <header>
        <?php include "includes/components/headeradmin.php"; ?>

        </header>
        <main style="padding-top: 10px;">
            <br>
            <br>
            <h2 style="margin-left: 15px;">Event Management</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 700px;">
                        <div class="row g-0">
                          <div class="col-xl-4">
                            <img src="/EventWave/images/kanye.jpeg" class="img-fluid rounded-start fit-image" alt="kanye concert">
                          </div>
                          <div class="col-xl-8">
                            <div class="card-body">
                              <h3 class="card-title" >Event Details</h3>
                              <p class="card-text"><strong>Event name:</strong> Kanye West summer Concert <br>
                                <strong>Event description:</strong> The Kanye West Summer Concert presents an opportunity
                                for administrators to oversee all logistical aspects, 
                                including venue preparation, ticket sales, security arrangements, 
                                and artist hospitality.
                                <br><strong>Date:</strong> 17/03/24
                                <br><strong>Venue:</strong> Garden Amphitheater
                                <br><strong>Max Capacity:</strong> 5000
                                
    </p>
                            </div>
                          </div>
                        </div>
                      </div></div>
                    <div class="col gx-5"> 
<br><br>
                        <div class="row justify-content-center mt-4">
                            <div class="col text-center" id="cross1"><h4>Tickets Sold</h4> <br></div>
                            <div class="col text-center" style="border-bottom: 2px solid black;"><h3>Revenue</h3>
                                <br> <h6>$580</h6></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col text-center" id="remainingTick"><br><h4>Tickets Remaining</h4>
                            <br> <h4></h4></div>
                            <div class="col text-center" id="cross2"><br><h4>Total Attendees</h4>
                            <br> <h4></h4></div>
                        </div>

                    </div>
                </div>
             </div>
             <h4 style="margin-left: 15px;">Attendee Details</h4>
    <div class="container-fluid">
    <?php

            
           // Fetch bookings for Event ID = 1 bcz thats kanyes event
$query = "SELECT * FROM BOOKING WHERE EVENT_ID = 1";
$result = $conn->query($query);

            if ($result) {
                echo '<table id="example" class="table table-striped table-responsive table-hover" style="width:100%">';
                echo '<thead class="table-dark">';
                echo '<tr>';
                echo '<th>Booking ID</th>';
                echo '<th>Booking Date</th>';
                echo '<th>Ticket ID</th>';
                echo '<th>Customer ID</th>';
                echo '<th>Event ID</th>';
                echo '<th>Status</th>';
                echo '<th>Edit</th>';
                echo '<th>Delete</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                // Fetch rows and output them as table rows
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['B_ID'] . '</td>';
                    echo '<td>' . $row['B_DATE'] . '</td>';
                    echo '<td>' . $row['TIC_ID'] . '</td>';
                    echo '<td>' . $row['CUSTOMER_ID'] . '</td>';
                    echo '<td>' . $row['EVENT_ID'] . '</td>';
                    echo '<td>' . $row['STATUS'] . '</td>';
                     // Edit and Delete buttons
                     echo '<td><a href="functions/editBooking.php?id=' . $row['B_ID'] . '" class="btn btn-primary btn-sm">Edit</a></td>';
                     echo '<td><a href="functions/adminDelete.php?id=' . $row['B_ID'] . '" class="btn btn-danger btn-sm">Delete</a></td>';
                     echo '</tr>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';

                // Free the result set
                $result->free();
            } else {
                // Handle query execution error
                echo "Error executing query: " . $conn->error;
            }
            // Close the database connection
            $conn->close();
            ?>
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addBookingModal">
                    Add Booking
            </button> <br><br><br>
    </div>
    <!-- Booking Modal -->
    <div class="modal fade" id="addBookingModal" tabindex="-1" aria-labelledby="addBookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookingModalLabel">Add New Booking</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Booking Form -->
                    <form id="addBookingForm">
                        <div class="mb-3">
                            <label for="bookingDate" class="form-label">Booking Date</label> <br>
                            <input type="text" class="form-control" id="bookingDate" name="bookingDate" placeholder="Booking Date">
                        </div>
                        <div class="mb-3">
                            <label for="ticketId" class="form-label">Ticket ID</label> <br>
                            <input type="text" class="form-control" id="ticketId" name="ticketId" placeholder="Ticket ID">
                        </div>
                        <div class="mb-3">
                            <label for="customerId" class="form-label">Customer ID</label> <br>
                            <input type="text" class="form-control" id="customerId" name="customerId" placeholder="Customer ID">
                        </div>
                        <input type="hidden" name="eventId" value="1">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addBooking()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function addBooking() {
            // AJAX request to insert booking data
            $.ajax({
                type: "POST",
                url: "functions/addBooking.php", 
                data: $("#addBookingForm").serialize(),
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Reload the page to update the table
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(xhr.responseText);
                }
            });
        }
        
        $(document).ready(function() {
    // Function to fetch and update ticket count
    function updateTicketCount() {
        $.ajax({
            url: 'functions/getTicketCount.php',
            type: 'GET',
            success: function(response) {
                // Find the element containing the ticket count
                var $cross1 = $('#cross1');
                
                // Retrieve the existing text content
                var existingContent = $cross1.html(); // Get existing HTML content
                
                // Append the fetched ticket count to the existing content
                var updatedContent = existingContent + ' ' + response;
                
                // Update the element with the new combined content
                $cross1.html(updatedContent); // Set updated HTML content

                var $cross2 = $('#cross2');
                var existingCont = $cross2.html();
                var updatedCont = existingCont +'' + response;
                $cross2.html(updatedCont);

                var $remainingTick = $('#remainingTick');
                var existingCon = $remainingTick.html();
                var updatedCon = existingCon +'' + (5000 - response); //bcz tot cap is 5000
                $remainingTick.html(updatedCon);
            },
            error: function() {
                $('#cross1').text('Failed to fetch ticket count');
                $('#cross2').text('Failed to fetch ticket count');
                $('#remainingTick').text('Failed to fetch ticket count');
            }
        });

       
    }

    // Call the function initially on page load
    updateTicketCount();


});


    </script>
  </main>
        
            <!-- place footer here -->
         <div id="black" class="container-fluid">  
 
            <footer class="footer container">
                <div class="container">
                    <div class="row" id="line">
                        <div class="col-sm-4 text-center">
                            <h3>Address</h3>
                            <p>5 Collage St. NW <br>Norcross, GA 30071<br>United States</p>
                            <p>Contact us :+101283855434</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3>Useful Links</h3>
                            <a href="#" class="text-white">Login</a> <br>
                            <a href="#" class="text-white">Sign up</a>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3>Open Hours</h3>
                            <p>MON to Fri:10:00 AM to 8:00 PM <br>Sat - sun to Fri 11:00 AM to 4:00 PM<br>Holidays: Closed</p>
                            <p>@Copyright 2024 EventWave</p>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="row text-center justify-content-center">
                        <div class="col">
                            <h3>EventWave</h3>
                            <ul class="footer-ul-navbar-nav text-white d-flex justify-content-center">
                                <li class="footer-nav-item mx-3">
                                    <a class="footer-nav-link text-white" href="index.html">Home</a>
                                </li>
                                <li class="footer-nav-item mx-3">
                                    <a class="footer-nav-link text-white" href="aboutUs.html">About</a>
                                </li>
                                <li class="footer-nav-item mx-3">
                                    <a class="footer-nav-link text-white" href="eventPage.html">Events</a>
                                </li>
                                <li class="footer-nav-item mx-3">
                                    <a class="footer-nav-link text-white" href="categories.html">Categories</a>
                                </li>
                                <li class="footer-nav-item mx-3">
                                    <a class="footer-nav-link text-white" href="contactUs.html">Contact</a>
                                </li>
                            </ul>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>            
</div>           
        <!-- Bootstrap JavaScript Libraries -->
         <script>
            $("#navDropdown").click(function (){ 
              $("#navdropdownContent").toggleClass("hide");
            });
         </script> 
         
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <!--scripts for table-->
       
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
        <script>new DataTable('#example');</script>
        
    </body>
</html>
