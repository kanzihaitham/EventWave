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
                    <a href="login.php" class="text-white">Login</a> <br>
                    <a href="signup.php" class="text-white">Sign up</a>
                </div>
                <div class="col-sm-4 text-center">
                    <h3>Open Hours</h3>
                    <p>MON to Fri: 10:00 AM to 8:00 PM <br>Sat - Sun to Fri 11:00 AM to 4:00 PM<br>Holidays: Closed</p>
                    <p>@Copyright 2024 EventWave</p>
                </div>
            </div>
            <button id="openFormBtn">For Enquiries</button>

<!-- Contact Us Modal -->
<div id="contactUsModal" class="modal-container" style="display: none;">
    <div class="modal-content" style="background-color: #f9f9f9; padding: 20px;">
        <span class="close" onclick="closeContactUsModal()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
        <h2 style="text-align: center; color:black">Contact Us</h2>
        <form id="contactForm" onsubmit="return validateForm()" style="margin-top: 20px;" method="post" action="../../functions/ContactUs.php">
            <label for="name" style="display: block; font-weight: bold; color:black">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            <label for="email" style="display: block; font-weight: bold; color:black">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            <label for="message" style="display: block; font-weight: bold; color:black">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"></textarea>
            <button type="submit" style="background-color: black; color: white; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; float: right;">Send</button>
        </form>
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

    <script>
        function closeContactUsModal() {
            document.getElementById('contactUsModal').style.display = 'none';
        }

        function validateForm() {
            var name = document.getElementById('name').value.trim();
            var email = document.getElementById('email').value.trim();
            var message = document.getElementById('message').value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (name === '' || email === '' || message === '') {
                alert('Please fill out all fields.');
                return false;
            } else if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                return false;
            }
            return true;
        }

        document.getElementById('openFormBtn').addEventListener('click', function() {
            document.getElementById('contactUsModal').style.display = 'block';
        });
    </script>
</div>
