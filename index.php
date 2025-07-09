<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('functions/db.php');

?>
<!doctype html> 
<html lang="en">
    <head>

        <title>Event Wave</title>

        <!-- Required meta tags auto from bootstrap -->
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
         <!-- Include jQuery library -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!--custom css file-->
        <link rel="stylesheet" href="includes/indexStyle.css" />
        <link rel="stylesheet" href="includes/groupStyle.css">

        <!--icons link-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!--other icon link-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    </head>

    <body>
      
            <?php include "includes/components/header.php"; ?>
            
        <main style="overflow-x: hidden;"> <!--  Main Content Here --> 

        <!--1st div images sliding div-->
        <div class="slider" id="div1">
                <!-- list of items -->
        <div class="list">
            <div class="item active">
                <img src="images/YE.jpeg" id="kanyeImage">
                <div class="content">
                    <p>30/04/24</p>
                    <h2>KANYE</h2>
                    <p>
                        Embark on a journey through music, art, and innovation as the visionary 
                        Kanye West brings his boundary-pushing creativity to the stage 
                        – immerse yourself in an experience unlike any other!
                    </p>
                    <p id="ticket-count-info" class="kanye-event">Loading ticket count...</p>
                </div>
            </div>
            <div class="item">
                <img src="images/szaconc.jpeg">
                <div class="content">
                    <p>17/03/24</p>
                    <h2>SZA</h2>
                    <p>
                        Indulge in an evening of soul-stirring melodies and raw emotion with SZA's enchanting concert 
                        – let her mesmerizing vocals transport you to a world of introspection and self-discovery.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="images/wkend1.jpeg">
                <div class="content">
                    <p>03/07/24</p>
                    <h2>THE WEEKND</h2>
                    <p>
                        Prepare for a night of pure exhilaration and pulsating beats with The Weeknd's electrifying concert!
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="images/cairokee1.jpeg">
                <div class="content">
                    <p>17/05/2024</p>
                    <h2>CAIROKEE</h2>
                    <p>
                        Join the revolution with Cairokee's revolutionary concert, where powerful lyrics and infectious rhythms converge to ignite your spirit
                         – experience the heartbeat of the Arab world like never before!
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="images/shakconc.jpg">
                <div class="content">
                    <p>18/09/2024</p>
                    <h2>SHAKIRA</h2>
                    <p>
                        Feel the rhythm of the world come alive as global icon Shakira takes the stage in a whirlwind of passion and Latin flair 
                        – let her infectious energy and irresistible charm sweep you off your feet!
                    </p>
                </div>
            </div>
        </div> 
        <!-- buttons and arrows -->
        <div class="arrows">
            <button id="prev"> < </button>
            <button id="next"> > </button>
        </div>
        <div class="book">
            <a href="KanyeEvent.html">
            <button class="btn btn-outline-light rounded-pill fw-bold" id="bookButton"> BOOK NOW</button>
            </a>
        </div>
        <!--thumbnails-->
        <div class="thumbnail">
            <div class="item active">
                <a href="KanyeEvent.php">
                <img src="images/YE.jpeg">
            </a>
                <div class="content">
                    KANYE
                </div>
            </div>
            <div class="item">
                <img src="images/szaconc.jpeg">
                <div class="content">
                    SZA
                </div>
            </div>
            <div class="item">
                <img src="images/wkend1.jpeg">
                <div class="content">
                    THE WEEKND
                </div>
            </div>
            <div class="item">
                <img src="images/cairokee1.jpeg">
                <div class="content">
                    CAIROKEE
                </div>
            </div>
            <div class="item">
                <img src="images/shakconc.jpg">
                <div class="content">
                    SHAKIRA
                </div>
            </div>
        </div>
        </div> 

        <!--second div-->
       <div class="container" id="div2">
        <div class="row">
         <div class="col-sm">
          <i class="fas fa-lock fa-lg" style="color: white;"></i> 
          <br>
          <br> <h5>TICKET GUARANTEE </h5>
           with ticket integrity 
        </div>
        <div class="col-sm">
        <i class="fas fa-thumbs-up fa-lg" style="color: white;"></i>
        <br>
        <br><h5>FAN RECOMMENDED</h5> 98% satisfaction rate
        </div>
        <div class="col-sm">
        <i class="fas fa-truck fa-lg" style="color: white;"></i>
        <br>
        <br><h5>SECURE DELIVERY</h5>  track your tickets online
        <br>
        </div>
        <br>
        </div>
       </div>

        <!--3rd div--> 
       <div id="div3">
        <br><br>
        <img src="images/tay2.jpeg" class= "img-fluid" alt="pic of taylor swift">
        <br><br>
       </div>

        <!--4th div--> 
        <div class="container">
            <br>
        <div class="row text-center" style="color: #fff; font-family: Poppins;"><h5>AS FEATURED IN</h5></div>
        <br>
        <div class="row">
            <div class="col text-center"> <img src="images/nbclogo.png" alt="nbc logo" class="networklogos"> </div>
            <div class="col text-center"> <img src="images/NYTlogo.png" alt="newyorktimes logo"  class="networklogos"></div>
            <div class="col text-center"> <img src="images/CNN-logo.png" alt="cnn logo"  class="networklogos"></div>
        </div>
        <br><br>
        </div>

        <!--5th div--> 
        <div class="imgs">
        <img src="images/bckg1.jpg" alt="pic generic concert" class="img-fluid">
        <div class="overlay-content text-center position-absolute">
            <br>
            <i class="fas fa-wallet fa-3x" style="color: white;"></i> <br> <br> <br>
            <h4 class="text-white">EVENTS TO SUIT YOUR POCKET</h4>
            <p style="font-weight: 500;"><br>Discover concerts and shows that won't break the bank! Whether you're on a tight budget or looking for affordable entertainment,
             <br>we've curated a selection of events to suit your wallet. 
             Explore our lineup and enjoy unforgettable experiences without overspending</p> <br>
            <button class="btn btn-outline-light rounded-pill fw-bold" id="buget">Events under 500LE</button> 
            <button class="btn btn-outline-light rounded-pill fw-bold" id="buget">Events under 1000LE</button>
            <br>
        </div>
        </div>
   
        <!--6th div-->
        <div class="row justify-content-center" style=" color: #fff;font-size: large;">
            <div class="col-lg-6">
              <div class="banner-container" id="bannerContainer">
                <div id="bannerText"><i>Download our app to get 20% off your next event ticket!</i></div> <br>
              </div>
            </div>
          </div>

        <!--7th div-->
        
        <div class="row" >
            <div class="col p-0 text-center d-flex align-items-center justify-content-center" id="logodiv"> 
            <div> <span style="font-weight: bold; font-size: xx-large;">EventWave</span>  <br> <i>Tax Reg ID: 1029267</i> </div> 
            </div>
             <div class="col p-0 position-relative"> <img src="images/heart.jpg" alt="heart hands" class="img-fluid">
                <div class="position-absolute top-50 start-50 translate-middle">

                    <form action="subscribe.php" method="post" class="form" >
                        <label for="emailInput" class="form-label text-uppercase text-white">newsletter</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email" style="background-color: transparent; color: white;" id="emailInput" name="email" required>
                            <button class="btn btn-outline-light" type="submit" name="submit">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <small class="form-text" style="color: #fff;"> * By signing up, you agree to receive email alerts and notifications.</small>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Registration Successful!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Thank you for registering with us!</p>
          <p>Your email <span id="registeredEmail"></span> has been successfully registered.</p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
            
      <br>
      <script>
        // When the Kanye pic is loaded
        $('#kanyeImage').on('load', function() {
            // Fetch ticket count via AJAX cz dynamic
            $.ajax({
                url: 'functions/getTicketCount.php',
                type: 'GET',
                success: function(response) {
                    $('#ticket-count-info').text(response + ' tickets sold. Get yours now!');
                },
                error: function() {
                    $('#ticket-count-info').text('Failed to fetch ticket count');
                }
            });
        });
    </script>
        </main>

        
 <!-- place footer here -->

 <?php include "includes/components/footer.php"; ?>
        
        <!-- Bootstrap JavaScript Libraries -->
     
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
        <!--box icons link old footer-->
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
         <!--custom js script link  -->
         <script  src="javascript/indexjs.js"></script> 
    </body>
</html> 
