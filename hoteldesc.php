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
<!--    <style type="text/css">
/*p{
  font-size: 17px;
}

*/

    </style>  -->
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


<h2><center>The Gateway</center></h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/the8.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/the2.jpg">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/the10.jpg" >
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/the8.jpg" >
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/the10.jpg">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/the2.jpg">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)" style="margin-top: 2%; ">❮</a>
  <a class="next" onclick="plusSlides(1)" style="margin-top: 2%; ">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row" style="margin-left: 0px; ">
    <div class="column column-slide">
      <img class="demo cursor" src="images/the8.jpg"  onclick="currentSlide(1)" alt="Main Hall">
    </div>
    <div class="column column-slide">
      <img class="demo cursor" src="images/the2.jpg" onclick="currentSlide(2)" alt="Dine hall">
    </div>
    <div class="column column-slide">
      <img class="demo cursor" src="images/the10.jpg"  onclick="currentSlide(3)" alt="Party hall">
    </div>
    <div class="column column-slide">
      <img class="demo cursor" src="images/the8.jpg"onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column column-slide">
      <img class="demo cursor" src="images/the10.jpg" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column column-slide">
      <img class="demo cursor" src="images/the2.jpg" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
  
    <div class="col-lg-4 desc">
      <br>
      <br>
      <br>
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
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3846.8796926700197!2d75.10747338965993!3d15.383000567939488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8d0d87e8ffb63%3A0x2edd6651fb41d377!2sHotel+Naveen+Lakeside!5e0!3m2!1sen!2sin!4v1518683780614" width="1100" height="450" frameborder="0" allowfullscreen ></iframe>
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