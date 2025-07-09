<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kanye Concert</title>
    <link rel="stylesheet" href="includes/Kanyestyle.css">
    <link rel="stylesheet" href="includes/groupStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Event Wave</title>

 
   
    <!-- Required meta tags auto from bootstrap -->

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

    <link rel="stylesheet" href="/includes/indexStyle.css" />



    <!--icons link-->

    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css rel="stylesheet">

    <link href= "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header>
            

<?php include "includes/components/header.php"; ?>

<!--Banner -->
<div class="banner">
    <section class = img>
        <!-- <img src="photos/Kanye.png" height =400 width=2000 alt="sza Concert" class="content">  -->
    </section>
</div>
     

<!--About -->
<div class="event-details">

<section class="about">
	<div class = "contentBx">
		<h2 class = "heading"> About Event</h2>
		<p class="text">To all of our Kanye fans we would gladly like to announce that Kanye will be performing at the pyraminds on the 30th of April</p>
            </div>

</section>
        <section class="services Rules">
            <h2 class = "heading"> Rules</h2>
                    <ul class="bullet-list">
                        <li>21 years old or above are only able to purchase a ticket.</li>
                        <li>Physical IDs will be checked at the doors.</li>
                        <li>Doors will open at 6:00 PM.</li>
                        <li>No signs or flags are allowed, and no substances allowed.</li>
                        <li>This is a cashless event. Only cards and digital wallets can be used.</li>
                        <li>Door selection rules apply.</li>
                      </ul>
                    
        </section>
</div>
        
          
<!-- Countdown Timer -->
<div id="countdown" style="font-size: 14px;"></div>
   <div class="tickets-container">
        <div class="Vip Ticket">
            <div class="ticket-header">
                <h2>VIP Ticket</h2>
            </div>
            <div class="ticket-details">
                <p>Date: April 30, 2024</p>
                <p>Time: 7:30PM</p>
                <p>Venue: Giza Pyramids, Panorama 2</p>
                <p>Price: £2,500</p>
                <div class="ticket-footer">
                    <button class="book-now-btn" price="£2,500" category="VIP">Book Now</button>
                </div>
            </div>
        </div>

            <div class="Gold Ticket">
                <div class="ticket-header">
                    <h3>Gold Ticket</h3>
                </div>
                <div class="ticket-details">
                    <p>Date: April 30, 2024</p>
                    <p>Time: 7:30PM</p>
                    <p>Venue: Giza Pyramids, Panorama 2</p>
                    <p>Price: £2,000</p>
                    <div class="ticket-footer">
                        <button class="book-now-btn"price="£2,000" category="Gold">Book Now</button>
                    </div>
                </div>
            </div>

                <div class="Bronze Ticket">
                    <div class="ticket-header">
                        <h4>Bronze Ticket</h4>
                    </div>
                    <div class="ticket-details">
                        <p>Date: April 30, 2024</p>
                        <p>Time: 7:30PM</p>
                        <p>Venue: Giza Pyramids, Panorama 2</p>
                        <p>Price: £1,250</p>
                        <div class="ticket-footer">
                            <button class="book-now-btn" price="£1,250" category="Bronze">Book Now</button>
                        </div>
                    </div>
                </div>
                </div>

<!-- Payment Modal -->
<div id="paymentModal" class="modal-container">
    <div class="modal-content">
        <span class="close-btn" onclick="closePaymentModal()">&times;</span>
        <h2>Payment Details</h2>
        <h3>Ticket : <span id="tCategory"></span></h3>
        <h3>Price : <span id="tPrice"></span></h3>
        <p>Please proceed with your payment...</p>
        <!-- Example: -->
        <form>
            <label for="cardNumber">Card Number:</label><br>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number"><br>
            <label for="cardHolderName">Card-Holder Name:</label><br>
            <input type="text" id="CardHolderName" name="Card-Holder Name" placeholder="Enter CardHolder Name"><br>
            <label for="expiryDate">Expiry Date:</label><br>
            <input type="date" id="validity-input" name="expiryDate" placeholder="MM/YY"><br>
            <label for="cvv">CVV:</label><br>
            <input type="number" id="cvv" name="cvv" placeholder="***"><br><br>
            <button type="buttons" onclick="payNow()">Pay Now</button>
        </form>
    </div>
</div>


<!--Venue-->

                    <section class="Venues">
                        <h2>Venue</h2>
                        <p>Giza Pyramids, Panorama 2</p>
                        <p>Al Haram, Nazlet El Semman, Giza Al Haram, Egypt</p>
                        <a href="#">Open In Maps</a>
                    </section> 
        <section class="FACILITIES">
                        <h2>FACILITIES</h2>
                            <p><img src="images/bathroom.png" height=20 width =20>Bathrooms</p>
                            <p><img src="images/parking-location.png" height=20 width =20> Parking</p>
                            <p><img src="images/food-service.png" height =20 width=20>Food Services</p>
                              <p><img src="images/security.png"height =20 width=20>security</p>
                    
        </section>
                         
        
        <?php include "includes/components/footer.php"; ?>        
<button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">top</button>
 
 

     
<!-- Bootstrap JavaScript Libraries -->

        <script

            src=https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js

            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"

            crossorigin="anonymous"

        ></script>
        <script>
            //function payNow() {
            //    if (confirm("Are you sure you want to confirm payment?")) {
             //       alert("Payment Confirmed!");
              //  }
                 function payNow() {
        // Retrieve form data
        var cardNumber = document.getElementById('cardNumber').value.trim();
        var cardHolderName = document.getElementById('CardHolderName').value.trim();
        var expiryDate = document.getElementById('validity-input').value.trim();
        var cvv = document.getElementById('cvv').value.trim();

        // Client-side validation (optional)
        if (cardNumber === '' || cardHolderName === '' || expiryDate === '' || cvv === '') {
            alert('Please fill out all fields.');
            return;
        }

        // Prepare data for AJAX request
        var formData = new FormData();
        formData.append('cardNumber', cardNumber);
        formData.append('cardHolderName', cardHolderName);
        formData.append('expiryDate', expiryDate);
        formData.append('cvv', cvv);

        // Send AJAX request to payment.php
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'payment.php', true);
        xhr.onload = function () {
            if (xhr.status == 200) {
                // Handle success response from payment.php
                alert(xhr.responseText); // Display the response from payment.php
                // You can also redirect the user or perform other actions upon successful payment
            } else {
                // Handle error response
                alert('Payment failed. Please try again.');
            }
        };
        xhr.onerror = function () {
            // Handle network errors
            alert('Network error occurred. Please try again.');
        };
        xhr.send(formData); // Send form data to payment.php
                 }
            
        </script>
 

        <script

            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js

            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"

            crossorigin="anonymous"

        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="javascript/Kanyescript.js"></script>
    </body>
    </html>