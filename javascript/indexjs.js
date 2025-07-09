//slider effect------------------------------------------------------------------------------
// Selecting DOM elements
let items = document.querySelectorAll('.slider .list .item'); // Selecting slider items
let next = document.getElementById('next'); // Selecting next button
let prev = document.getElementById('prev'); // Selecting previous button
let thumbnails = document.querySelectorAll('.thumbnail .item'); // Selecting thumbnail items

// Configuration parameters
let countItem = items.length; // Total number of items in the slider
let itemActive = 0; // Index of the currently active item

// Event handler for next button click
next.onclick = function(){
    itemActive = (itemActive + 1) % countItem; // Increment active item index
    showSlider(); // Update slider display
}

// Event handler for previous button click
prev.onclick = function(){
    itemActive = (itemActive - 1 + countItem) % countItem; // Decrement active item index
    showSlider(); // Update slider display
}

// Auto run slider
let refreshInterval = setInterval(() => {
    next.click(); // Trigger next button click every 5 seconds
}, 10000);

// Function to update slider display
function showSlider(){
    // Remove active state from old item
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // Add active state to new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // Clear auto slider interval and restart it
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click(); // Trigger next button click every 5000 milliseconds (5 seconds)
    }, 5000);
}

// Click event for thumbnail items
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index; // Update active item index
        showSlider(); // Update slider display
    });
});

//subscription banner -----------------------------------------------------------------------------------------------
// Get elements
var bannerText = document.getElementById("bannerText");
var bannerContainer = document.getElementById("bannerContainer");

// Set initial position
bannerText.style.position = "absolute";
bannerText.style.left = "100%";

// Array of messages
var messages = [
  "Download our app to get 20% off your next event ticket!",
  "Sign up to our newsletter for exclusive offers!"
];

var index = 0;

// Animation function
function animateBanner() {
    bannerText.textContent = messages[index];
    var pos = bannerContainer.offsetWidth;
    var id = setInterval(frame, 10);
    function frame() {
      if (pos === -bannerText.offsetWidth) {
        clearInterval(id);
        index = (index + 1) % messages.length;
        setTimeout(animateBanner, 2000); // Delay before starting the next animation
      } else {
        pos--;
        bannerText.style.left = pos + "px";
      }
    }
  }

// Call animation function
animateBanner();

//newsletter email validations--------------------------------------------------------------------------------
const form = document.querySelector('form');
const emailInput = document.getElementById('emailInput');

form.addEventListener('submit', function(event) {
    const email = emailInput.value.trim();
    if (!isValidEmail(email)) {
        event.preventDefault();
        emailInput.classList.add('invalid-email');
        alert('Please enter a valid email address.');
    }
});

emailInput.addEventListener('blur', function() {
    const email = emailInput.value.trim();
    if (!isValidEmail(email)) {
        emailInput.classList.add('invalid-email');
        alert('Please enter a valid email address.');
    } else {
        emailInput.classList.remove('invalid-email');
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

//jQuery
//Book when kanye image is there only---------------------------------------------------------------
$(document).ready(function() {
  $("#bookButton").click(function() {
      if($(".item.active img").attr("src") === "images/YE.jpeg") {
          window.location.href = "events.html"; 
      }
  });
});

//modal pops up only if the user enters correct email
$(document).ready(function() {
  // event listener to the form submit button
  $("form").submit(function(event) {
      // Prevent the default form submission behavior
      event.preventDefault();
      
      // Get entered email value
      var email = $("#emailInput").val().trim();
      
      // Validate email 
      if (!isValidEmail(email)) {
          // If email is not valid, display an alert message
          alert('Please enter a valid email address.');
          return;
      }
      
      // If email is valid, set the registered email in the modal
      $("#registeredEmail").text(email);
      
      // Trigger the modal to open
      $("#successModal").modal('show');
  });
});

$(document).ready(function () {
    $(".data-table").each(function (_, table) {
      $(table).DataTable();
    });
    $("#navDropdown").click(function (){ 
      $("#navdropdownContent").toggleClass("hide");
    });
  });


