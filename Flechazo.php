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





    <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
#ad-container {
  position: relative;
}

/* Hide the images by default */
#ad-mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
#ad-prev,
#ad-next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
#ad-next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
#ad-prev:hover,
#ad-next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.ad-numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.ad-caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.ad-row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.ad-column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.ad-demo {
  opacity: 0.6;
}

.ad-active,
.ad-demo:hover {
  opacity: 1;
}
</style>




  </head>
  <body style="background-color:#F4F4F4;">
  <!--navbar-->
  <?php include_once "header.php"; ?>

 <div class="container bg-primary">
  <!-- Start coding from here -->
 
    <div class="row">
      <!-- main right -->
      <div class="col-md-9 bg-info">
        this is left
        <div class="container">
          <div class="row">
            <div class="col-md-5 bg-danger">
              <!-- here crousel -->
 <!--              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/24821/pexels-photo-24821.jpg?h=350&auto=compress&cs=tinysrgb" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/859933/pexels-photo-859933.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
   
     <div id="ad-container" class="container">
  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">1 / 6</div>
    <img src="img_woods_wide.jpg" style="width:100%">
  </div>

  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">2 / 6</div>
    <img class="d-block img-fluid" src="https://images.pexels.com/photos/24821/pexels-photo-24821.jpg?h=350&auto=compress&cs=tinysrgb" style="width:100%">
  </div>

  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">3 / 6</div>
    <img class="d-block img-fluid" src="https://images.pexels.com/photos/24821/pexels-photo-24821.jpg?h=350&auto=compress&cs=tinysrgb" style="width:100%">
  </div>
    
  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">4 / 6</div>
    <img class="d-block img-fluid" src="https://images.pexels.com/photos/24821/pexels-photo-24821.jpg?h=350&auto=compress&cs=tinysrgb" style="width:100%">
  </div>

  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">5 / 6</div>
    <img class="d-block img-fluid" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%">
  </div>
    
  <div id="ad-mySlides" class="mySlides">
    <div class="ad-numbertext">6 / 6</div>
    <img class="d-block img-fluid" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%">
  </div>
    
  <a id="ad-prev" class="prev" onclick="plusSlides(-1)">❮</a>
  <a id="ad-next" class="next" onclick="plusSlides(1)">❯</a>

  <div class="ad-caption-container">
    <p id="caption"></p>
  </div>

  <div class="ad-row">
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="ad-column">
      <img class="d-block img-fluid" class="ad-demo cursor" src="https://images.pexels.com/photos/596940/pexels-photo-596940.jpeg?h=350&auto=compress&cs=tinysrgb" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
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









            </div>
            <div class="col-md-7 bg-success">
              <!-- here content -->
              <div class="title"><span style="font-weight: bold;columns: solid black;font-size: 20px;">Flechazo</span></div>
              <a href="#">Marathahalli, East Bangalore</a>
              <h5 Pt-2px>Rs:1300 <span style="color:gray; font-size: 15px;"> for two (approx.)</span></h5>
                <a href="#">North Indian, Mediterranean, Asian</a>
               <div class="dropdown">
                <h6>Sat - &nbsp;&nbsp;11:30 AM to 04:00 PM <span style="color: red;font-size: 15px;">(Closed Now)</span></h6>
                <h6 class="mx-auto">06:30 PM to 01:00 AM</h6>

                 
  <i class="  dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    View
  </i>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                
            


            </div>
          </div>
        </div>
  </div>




      <!-- main left -->
      <div class="col bg-danger">
        this is right
      </div>





      <!-- main container end -->
    </div>
  </div>
</body>




  <!-- End coding from here -->
  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#ad-myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.ad-modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.ad-modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#ad-caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.ad-modal-content, #ad-caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.ad-close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.ad-close:hover,
.ad-close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
</head>
<body>


<img id="myImg" src="https://images.pexels.com/photos/859933/pexels-photo-859933.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Trolltunga, Norway" width="300" height="200">

<!-- The Modal -->
<div id="myModal" class="ad-modal">
  <span class="ad-close">&times;</span>
  <img class="ad-modal-content" id="img01">
  <div id="ad-caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("ad-close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>
