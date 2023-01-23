<!DOCTYPE html>
<html lang="en">
<head>
    <link  rel="stylesheet" type= "text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/59f4cd0000.js" crossorigin="anonymous"></script>
    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Financial Tech</title>
</head>
<body onload="slider()">
    <header>
        <nav>
            <!----><img src="images/studfintechLogo2.png" id="logo">
            <h1><label class="head"></label>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>  
                </label>    
                <li>
                    <ul><a href="gallery.php"><!--<i class="fa-brands fa-envira"></i>-->&nbsp;DONATE</a></ul>
                    <ul><a href="#service"><!--<i class="fa-solid fa-blender-phone"></i>-->&nbsp;REGISTER</a></ul>
                    <ul><a href=""><!--<i class="fa-solid fa-location-arrow"></i>-->&nbsp;SERVICES</a></ul>
                    <ul><a href="tel:+27 76 359 0122"><!--<i class="fas fa-mobile-alt"></i>--> <span class="ml-1">CONTACT US</span></a></ul>
                    
                </li>
            </h1>
        </nav>
    </header>
    <section>
        <div class="wrapper">
            
            <div class="content">
                <br><br><br><br><br><br><br><br><br><br><br>
                <h1 id="welcome">Student Financial Tech</h1>
                <h3 id="slogan">Investing In Knowledge and Technology</h3>
                <br><br>
                <li>
                    <br><br><br><br><br><br>
                    <ul><a href="">More Info</a>&nbsp;&nbsp;<a href="">Explore</a></ul>
                </li>
            </div>
        </div>
    </section>
    <h2 id="ourservice">About US</h2>
    <div class="about">
        <div class="box1">
            <h2 style="text-align:left; padding-left:60px; font-family: Arial; font-size: 2em;">
                STUD-FINTECH was established by students who were<br> faced with these kinds of 
                challenges where no reasonably <br>accessible help could be found. 
            </h2>
            <p style="padding-left: 40px;
                    padding-right: 40px; 
                    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                    color: black;
                    font-size: 18px;
                    text-align: center;">
               As self-experienced, the strain of financial instability can be debilitating 
               and discouraging which could easily result <br>in a student abandoning their studies 
               altogether and miss the opportunity of completing, which is further exasperated <br>in 
               the cases of final year students. As such, STUD-FINTECH understands the socio-economic pressures, 
               the burden of family, <br>the demands of industry and the frustration of university administrative processes. 
               STUD-FINTECH seeks to encompass <br>an easily navigable environment to such students, all in a centrally administered manner.
               
            </p>
            <a href="" style="text-decoration: none;
                              text-align: left;
                              font-family: monospace;
                              align-items: left;
                              margin-left: 0px;
                              color: white;
                              background: black;
                              padding: 5px;">Read More</a>
        </div>
        
    </div>
    
    
    <div id="row1">
        <div id="sec">
            <h2>Overview</h2>
            <p id="list">
            This non-government organization (NGO), named STUD-FINTECH, 
            was established out of an essential need identified specifically 
            during the Covid Pandemic. The pandemic exploited students in terms
             of study duration when the lockdowns prevented some student to access
              universities as well as take on a full study load. This resulted in
               those students with NSFAS funding to exceed the n+1 margin for completion.
            </p>
        </div>
        <div id="sec">
            
                <img src="images/why us.jpg" alt="" height="350px" width="500px" style="float:right";/>
            
        </div>
    </div>

    <h2 id="ourservice">Our Services</h2>
    <div id="row1">
    <div id="service">
            <h3>Funding</h3>
            <p id="list">
                This is provided for registered<br>
                students with outstanding fees <br>
                without a bursary or NSFAS. The<br>
                applicant should only be remaining<br>
                with their last module in order <br>
                to be considered.
            </p>
        </div>
        <div id="service">
            <h3>Students Placement</h3>
            <p id="list">
                We assist students who could<br>
                not find placement in the industry<br>
                to complete their studies with WIL <br>
                programs. We also assist students <br>
                with employment upon their<br>
                completion of studies.<br>
            </p>
        </div>
        <div id="service">
            <h3>Bursary</h3>
            <p id="list">
                We provide bursaries for only<br>
                registered students who are doing<br>
                their Advanced Diploma. We also  <br>
                offer for students who do not<br>
                qualify for NSFAS
            </p>
        </div>
    </div>
    <br><br>
<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/online-learning.jpg" style="width:70%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/people.jpg" style="width:70%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/board.jpg" style="width:70%">
  <div class="text"></div>
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

<style>
    * {box-sizing:border-box}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
    display: none;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }
</style>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
    <br><br><br><br>

    <footer id="footer">
        <div id="row">
            <div class="col">
                <h2><i class="fa-solid fa-location-dot"></i>Address</h2>
                <p>2314 Edison Mashaba street</p>
                <p>Soshanguve, Block L</p>
                <p>0152</p>
            </div>

            <div class="col">
                <h2>Follow US</h2>
                <p><a href=""><i class="fab fa-facebook"></i> <span class="ml-1">Facebook</span></a></p>
                <p><a href=""><i class="fab fa-twitter"></i> <span class="ml-1">Twitter</span></a></p>
                <p><a href=""><i class="fab fa-whatsapp"></i> <span class="ml-1">Whatsapp</span></a></p>
                
            </div>

            <div class="col">
                <h2 id="contact">Contact US</h2>
                <p><a href="tel:+27 76 359 0122"><i class="fas fa-mobile-alt"></i> <span class="ml-1">+27 76 359 0122</span></a></p>
                <p><a href="tel:+27 71 894 8004"><i class="fas fa-mobile-alt"></i> <span class="ml-1">+27 71 894 8004</span></a></p>
                <p><a href="mailto:"><i class="fa-solid fa-envelope-circle-check"></i><span class="m1-1">&nbsp;studfintech@gmail.com</span></a></p>
            </div>
            <!--<div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3585.5800549995165!2d28.196700515026144!3d-26.01457048352264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5884243fb0724f1d!2zMjbCsDAwJzUyLjUiUyAyOMKwMTEnNTYuMCJF!5e0!3m2!1sen!2sza!4v1648025793350!5m2!1sen!2sza"
                     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>-->
        </div>

            <hr class="fotterP">
            <p id="copyright">Student Financial Tech © <span style="float:right;">Copyright 2022 - All Rights Reserved</span></p>
    </footer>
</body>
<script>
  var slideImg = document.getElementById("slideImg");
  
  var images = new Array(
       "images/house6.jpg",
       "images/house5.jpg",
	   "images/part1.jpg",
	   "images/ceil1.jpg",
	   "images/walls3.jpg",
	   "images/raft2.jpg",
	   "images/carport6.jpg",
	   "images/bathroom2.jpg"
	   
  
  );
  
  
  var len = images.length;
  var i = 0;
  
  function slider(){
	  if(i > len-1){
		  i=0;
	  }
	  slideImg.src=images[i];
	  i++;
	  setTimeout('slider()',3000);
  }
  
 </script>
</html>