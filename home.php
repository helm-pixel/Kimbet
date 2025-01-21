<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Design</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the CSS file -->
</head>
<body>
  <header>
    <div class="logo-container">
        <img src="img/logo.jpg" alt="Logo" class="logo">
    </div>
    <nav>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="accommodation.php">ACCOMMODATION</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li>
  
                <a href="support.php" class="dropdown-trigger">SUPPORT</a>
                <div class="dropdown">
                    <a href="#faq">FAQ</a>
                    <a href="#contact-support">CONTACT SUPPORT</a>
                    <a href="#booking-policies">BOOKING POLICIES</a>
                    <a href="#user-guides">USER GUIDES</a>
                    <a href="#terms-conditions">TERMS & CONDITIONS</a>
                    <a href="#privacy-policy">PRIVACY POLICY</a>
                </div>
            </li>
            <li>
                <div class="dropdown-trigger">&#x1F464;</div>
                <div class="dropdown">
                    <a href="#account">MY ACCOUNT</a>
                    <a href="#booking">BOOKING</a>
                    <a href="#submit-feedback">SUBMIT FEEDBACK</a>
                    <a href="#review">REVIEW</a>
                    <a href="#setting">SETTING</a>
                    <a href="#logout">LOG OUT</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

    <div id="userMenu" style="display: none;">
        <p>Welcome, User!</p>
        <a href="#logout">Logout</a>
    </div>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/gmbrbg1.jpg" style="width:100%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/gmbrbg2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/gmbrbg3.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
<div class="hero">
    <h1>Welcome to Our Site</h1>
    <p>Explore our services and accommodations</p>
    </div>

    <div class="sections home-sections">
      <div class="section">
          <h2>Our Services</h2>
          <p>Description of services.</p>
          <a href="services.php">
              <img src="img/image1.jpeg" alt="Clickable Image">
          </a>
      </div>
      <div class="section">
          <h2>Client Testimonials</h2>
          <p>Description of client testimonials.</p>
          <a href="https://example.com" target="_blank">
              <img src="img/image2.jpeg" alt="Clickable Image">
          </a>
      </div>
      <div class="section">
          <h2>Portfolio</h2>
          <p>Description of portfolio.</p>
          <a href="https://example.com" target="_blank">
              <img src="img/image3.jpeg" alt="Clickable Image">
          </a>
      </div>
  </div>

    <footer>
        <p>Contact Us | Address | Email | Phone</p>
    </footer>

    <script src="js/script.js"></script> <!-- Link to the JavaScript file -->
    <script>
      let slideIndex = 0;
      let slideTimeout;
      showSlides();
      
      // Next/previous controls
      function plusSlides(n) {
        clearTimeout(slideTimeout);
        slideIndex += n;
        if (slideIndex < 1) {
          slideIndex = document.getElementsByClassName("mySlides").length;
        } else if (slideIndex > document.getElementsByClassName("mySlides").length) {
          slideIndex = 1;
        }
        showSlides(slideIndex, false);
      }
      
      // Thumbnail image controls
      function currentSlide(n) {
        clearTimeout(slideTimeout);
        slideIndex = n;
        showSlides(slideIndex, false);
      }
      
      function showSlides(n, auto = true) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
      
        if (!n) {
          slideIndex++;
          if (slideIndex > slides.length) { 
            slideIndex = 1;
          }
        } else {
          slideIndex = n;
        }
      
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
      
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
      
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
      
        // Reset the timeout for automatic sliding
        slideTimeout = setTimeout(() => showSlides(), 5000); // Change image every 7 seconds
      }
      </script>
        
</body>
</html>
