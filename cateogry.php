<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="includes/index.css">
    <title>Event cateogries</title>
</head>
<body>
    <?php include "includes/components/header.php"; ?>
    <main>
        <section class = "c-main-banner">
            <div class = "c-container">
                <h1>Events Categories</h1>
                <p>Discover unforgettable experiences in our curated events category</p>
            </div>
        </section>
        <section class = "c-img-slider">
                <div class="slide_show">
                    <div class="slide_img">
                        <div class="slide"><img src="images/show-events-01.jpg" alt="slider image 1 "></div>
                        <div class="slide"><img src="images/show-events-02.jpg" alt="slider image 2"></div>
                        <div class="slide"><img src="images/show-events-03.jpg" alt="slider image 3"></div>
                        <div class="slide"><img src="images/show-events-04.jpg" alt="slider image 4"></div>
                        <div class="slide"><img src="images/ticket-details.jpg" alt="slider image 5"></div>
                        <div class="slide"><img src="images/ticket-06.jpg" alt="slider image 6"></div>
                        </div> 
                    </div>
                <div class="slide_btn">
                    <a href="#" class="prev"><i class="fas fa-angle-left"></i></a>
                    <a href="#" class="next"><i class="fas fa-angle-right"></i></a>
                </div>
            </div>

        </section>
        <section class = "c-icons-bars ">
            <div class = "c-icon-cards-container">
                <div class = "c-icon-card">
                    <i class="fa-solid fa-lock"></i> 
                    <h3>TICKET GUARANTEE<br><span>with Ticketlntegrity™</span></h3>
                </div>
                <div class = "c-icon-card">
                    <i class="fa-regular fa-thumbs-up"></i> 
                    
                    <h3>FANS RECOMMEND US<br><span>Trustpilot rating</span></h3>
                </div>
                <div class = "c-icon-card">
                    <i class="fa-solid fa-truck"></i>  
                    <h3>SECURE DELIVERY<br><span>Royal Mail, UPS & eTickets</span></h3>
                </div>
            </div>

        </section>
        <section class = "c-info">
            <div class = "c-container">
                <p class = "c-info-header">#justannounced</p>
                <div class = "c-info-container">
                    <div class = "c-info-firstc">
                        <h2>Pop events</h2>
                        <p>EG TOUR</p>
                    </div>
                    <div>
                        <p>Run For The Climate</p>
                        <p>Stand Up Comedy</p>
                        <p>Wellness Day</p>
                        <p>Radio Masr Workshop</p>
                        <p>Welcome Party</p>
                        <p>Christmas Festival</p>
                    </div>
                    <div>
                        <p>BUE</p>
                        <p>GUC</p>
                        <p>AUC</p>
                        <p>MIU</p>
                        <p>UH</p>
                        <p>FUE</p>
                    </div>
                    <div>
                        <p>9:00</p>
                        <p>12:00</p>
                        <p>10:00</p>
                        <p>11:00</p>
                        <p>16:00</p>
                        <p>13:00</p>
                    </div>
                    <div>
                        <p>19 April</p>
                        <p>25 Nov</p>
                        <p>24 Sep</p>
                        <p>29 Feb</p>
                        <p>3 Nov</p>
                        <p>28 Dec</p>
                    </div>
                </div>
            </div>

        </section>
        <section class = "c-cards-s">
            <div class = "c-cards-wrapper">
                <div class = "c-card c-card-concerts">
                    <h2>CONCERTS</h2>
                    <a href = "KanyeEvent.php">View Events</a>
                </div>
                <div class = "c-card c-card-sport">
                    <h2>SPORTS</h2>
                    <a href = "#">View Events</a>
                </div>
                <div class = "c-card c-card-comedy">
                    <h2>COMEDY</h2>
                    <a href = "#">View Events</a>
                </div>
                <div class = "c-card c-card-festival">
                    <h2>FESTIVALS</h2>
                    <a href = "#">View Events</a>
                </div>
            </div>
        </section>
        <section class = "c-sponsors">
            <h3>SPONSORS</h3>
            <img src =  "images/bbc-logo.png" alt = "BBC logo">            <img src =  "images/CNN.png" alt = "CNN logo">
            <img src =  "images/coca-cola-256.png" alt = "coca cola logo">
            <img src =  "images/redbull.png" alt = "redbull logo">
        </section>

    </main>
   
    <?php include "includes/components/footer.php"; ?>
 
    
    <script src="javascript/cateogry.js"></script>
</body>
</html>