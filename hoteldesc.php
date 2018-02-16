  <!doctype html>
<html lang="en">
  <head>
    <title>page title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
   <style type="text/css">
    /*  .checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em; 
    height: 1.3em;
    float: left;
    margin-right: .5em;
}



.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

/*.radio .cr .cr-icon {
    margin-left: 0.04em;
}*/
/*
.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {
    display: none;
}

.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(2) rotateZ(-10deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {
    opacity: .5;
}-->

*/
p{
  font-size: 17px;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 45%;
  width: auto;
  padding: 0px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  padding-right: 30px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.32%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


.checked {
    color: black;
}
.non{
  color: red;
}

    </style> 
  </head>
  <body style="background-color:#F4F4F4; margin: 0px;">
  <!--navbar-->
  <?php include_once "header.php"; ?>


  <!-- Start coding from here -->

<div class="container"  >
  <div class="row">

    <div class="col-lg-8">
   <br>
   <!-- <h2>The Gateway Hotel</h2>

style="background-color:#f7A8A4;"

          <div id="carouselExampleControls0" class="carousel slide" data-ride="carousel" style="width:730px; height: 769px;">
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/the4.jpg" alt="First slide" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/the10.jpg" style="width:100%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img2.jpg" alt="Third slide" style="width:100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls0" role="button" data-slide="prev" style="padding-bottom: 210px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls0" role="button" data-slide="next" style="padding-bottom: 210px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div> -->


<h2 style="text-align:center; ">The Gateway</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/the8.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/the2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/the10.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/the8.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/the10.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/the2.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row" style="margin-left: 0px; ">
    <div class="column">
      <img class="demo cursor" src="images/the8.jpg" style="width:100%" onclick="currentSlide(1)" alt="Main Hall">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/the2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Dine hall">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/the10.jpg" style="width:100%" onclick="currentSlide(3)" alt="Party hall">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/the8.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/the10.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/the2.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
  
    <div class="col-lg-4" style="line-height: 23px;">
      <br>
      <br>
      <br>
         <!--  <div class="checkbox">
            <label style="font-size: 1.5em">
                <input type="checkbox" value="" checked>
                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                Bigger
            </label>
        </div> -->
        <h2>Khan Saheb Grills and Rolls</h2>
<p>Malleshwaram, West Bangalore</p>
<p>₹ 500 for two (approx.)</p>
<p>North Indian</p>
<p>Tue -
12:30 PM to 12:30 AM (Closed Now)<!-- <a href="#" style="text-decoration: none;">&nbsp;View all ></a> --></p> 


<h5>Ratings</h5>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star non"></span>
<span class="fa fa-star non"></span>
    </div>
  </div>
  <br>
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.8796926700197!2d75.10747338965993!3d15.383000567939488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d0d87e8ffb63%3A0x2edd6651fb41d377!2sHotel+Naveen+Lakeside!5e0!3m2!1sen!2sin!4v1518683780614" width="1100" height="450" frameborder="0" style="border:0;padding-left: 39px;" allowfullscreen ></iframe>
  </div>
  <br>
  </div>
</div>




  <!-- End coding from here -->
  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
  </body>
</html>