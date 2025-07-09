document.addEventListener("DOMContentLoaded", function() {
    var slideImg = document.querySelector(".slide_img");
    var slides = slideImg.querySelectorAll(".slide");
    var slideBtnPrev = document.querySelector(".prev");
    var slideBtnNext = document.querySelector(".next");

    var slideCount = slides.length;
    var slideWidth = slides[0].offsetWidth;
    var currentSlide = 0;
    var intervalId; // Variable to store the interval ID

    function nextSlide() {
        currentSlide++;
        if (currentSlide >= slideCount-3) {
            currentSlide = 0; // Reset to the first slide
        }
        updateSlide();
    }

    function prevSlide() {
        currentSlide--;
        if (currentSlide < 0) {
            currentSlide = slideCount - 1; // Go to the last slide
        }
        updateSlide();
    }

    function updateSlide() {
        slideImg.style.transition = "transform 0.5s ease"; // Add transition for smooth sliding animation
        slideImg.style.transform = "translateX(-" + slideWidth * currentSlide + "px)"; // Apply transform for sliding

        // Reset transition after animation completes
        setTimeout(function() {
            slideImg.style.transition = "none";
        }, 500);
    }

    slideBtnNext.addEventListener("click", function(event) {
        event.preventDefault();
        clearInterval(intervalId); // Stop the automatic slide movement when manual navigation is used
        nextSlide();
    });

    slideBtnPrev.addEventListener("click", function(event) {
        event.preventDefault();
        clearInterval(intervalId); // Stop the automatic slide movement when manual navigation is used
        prevSlide();
    });

    // Function to automatically move the slider every 3 seconds
    function autoSlide() {
        intervalId = setInterval(nextSlide, 3000); // Move to the next slide every 3 seconds
    }

    // Start the automatic slide movement initially
    autoSlide();

    // Pause the automatic slide movement when hovering over the slider
    slideImg.addEventListener("mouseenter", function() {
        clearInterval(intervalId);
    });

    // Resume the automatic slide movement when leaving the slider
    slideImg.addEventListener("mouseleave", function() {
        autoSlide();
    });
});

