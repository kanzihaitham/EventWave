

// Get the button
var scrollToTopBtn = document.getElementById("scrollToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/*jquery*/
$(".book-now-btn").click(function(){
  var ticketprice  = $(this).attr("price");
  var ticketCategory  = $(this).attr("category");

  $("#paymentModal").css("display" , "block");
  $("#paymentModal #tCategory").html(ticketCategory);
  $("#paymentModal #tPrice").html(ticketprice);
});


$(".close-btn").click(function () {
  $("#paymentModal").css("display" , "none");
  
});


// Set the date and time of the concert
var concertDate = new Date("April 30, 2024 19:30:00").getTime();

// Update the countdown every second
var countdownInterval = setInterval(function() {
    // Get the current date and time
    var now = new Date().getTime();
    
    // Calculate the time remaining until the concert starts
    var timeRemaining = concertDate - now;
    
    // Calculate days, hours
    var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    
    // Update the countdown element with the time remaining
    document.getElementById("countdown").innerHTML = "Concert starts in: " + days + "d " + hours + "h ";
    
    // If the countdown is over, stop updating it
    if (timeRemaining < 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "Concert has already started!";
    }
}, 1000); // Update every second

/*
document.getElementById('paymentForm').onsubmit = function(event) {
  // Validate card number length
  var cardNumber = document.getElementById('cardNumber').value;
  if (cardNumber.length !== 16 || isNaN(cardNumber)) {
      alert("Card number must be exactly 16 digits.");
      event.preventDefault(); // Stop form submission
      return false;
  }

  // Validate CVV length
  var cvv = document.getElementById('cvv').value;
  if (cvv.length !== 3 || isNaN(cvv)) {
      alert("CVV must be exactly 3 digits.");
      event.preventDefault(); // Stop form submission
      return false;
  }

  // Validate that all fields are filled
  var cardHolderName = document.getElementById('cardHolderName').value;
  var expiryDate = document.getElementById('expiryDate').value;
  if (!cardHolderName || !expiryDate) {
      alert("Please fill out all fields.");
      event.preventDefault(); // Stop form submission
      return false;
  }
}*/

//VALIDATION FOR PAYMENT
const cardNumber=document.getElementById("cardNumber");
const cardHolderName=document.getElementById("Card-holder-name");
const cardHolderInput=document.getElementById("card-name-input");
const displayValidity = document.getElementById("validity");
const validityInput = document.getElementById("validity-input");
const cardNumberDisplay = document.querySelectorAll(".card-number-display");
const cvvInput = document.getElementById("cvv");
const cvvDisplay = document.getElementById("cvv-display");
let currentSpanIndex = 0;
cardNumber.addEventListener("input", () => {
  const inputNumber = cardNumber.value.replace(/\D/g, "");
  cardNumber.value = cardNumber.value.slice(0, 16).replace(/\D/g, "");
  for (let i = 0; i < cardNumberDisplay.length; i++) {
    if (i < inputNumber.length) {
      cardNumberDisplay[i].textContent = inputNumber[i];
    } else {
      cardNumberDisplay[i].textContent = "_";
    }
  }
  if (inputNumber.length <= cardNumberDisplay.length) {
    currentSpanIndex = inputNumber.length;
  } else {
    currentSpanIndex = cardNumberDisplay.length;
  }
});
cardNameInput.addEventListener("input", () => {
    if (cardNameInput.value.length < 1) {
      cardHolderName.innerText = "Your Name Here";
    } else if (cardNameInput.value.length > 30) {
      cardNameInput.value = cardNameInput.value.slice(0, 30);
    } else {
      cardHolderName.innerText = cardNameInput.value;
    }
  });
  validityInput.addEventListener("input", () => {
    const inputString = validityInput.value;
    if (inputString.length < 1) {
      displayValidity.innerText = "06/28";
      return false;
    }
    const parts = inputString.split("-");
    const year = parts[0].slice(2);
    const month = parts[1];
    //Final formatted string
    const formattedString = `${month}/${year}`;
    displayValidity.innerText = formattedString;
  });
  //cvv
cvvInput.addEventListener("input", () => {
    const userInput = cvvInput.value;
    const sanitizedInput = userInput.slice(0, 3);
    const numericInput = sanitizedInput.replace(/\D/g, "");
    cvvInput.value = numericInput;
    cvvDisplay.innerText = numericInput;
  });
