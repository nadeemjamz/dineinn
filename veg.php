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
      .card {
    box-shadow: 0px 0px 0px grey;
    border-radius: 0px;

}
.card:hover {
    box-shadow: 2px 2px 20px grey;
}
a:hover{
  text-decoration: none;
}
p{
  font-size: 14px;
  line-height: 7px;
}



* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
/*  padding: 12px 20px 12px 40px;*/
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; / Prevent double borders /
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}



    </style>
  </head>
  <body style="background-color:#F4F4F4;">
  <!--navbar-->
  <?php include_once "header.php"; ?>


  <!-- Start coding from here -->

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6">
      <div class="jumbotron jumbo-m">
        <h4>Quick Filters</h4>
        <input type="Search" name="" placeholder="Search"><br>
        <input type="checkbox" name="">50% OFF Food<br>
        <input type="checkbox" name="">50% OFF Alchohol<br>
        <input type="checkbox" name="">50% OFF Buffet<br>
        <input type="checkbox" name=""> Bill Upload
        <a href="#"><h5>show more...</h5></a>
        <hr>
    <h4>Localities & Area</h4>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="height: 35px;">

<ul id="myUL" style="line-height: 10px;">
  <li><a href="#">Hubli</a></li>
  <li><a href="#">Dharwad</a></li>
  <li><a href="#">Belgaum</a></li>

<li><a href="#" data-toggle="modal" data-target="#myModal" style="color: blue;">show more...</a></li>
 
</ul>
<hr>

  <h4>Tags</h4>
  <input type="Search" name="" placeholder="Search"><br>
        <input type="checkbox" name="">Pure Veg<br>
        <input type="checkbox" name="">Breakfast<br>
        <input type="checkbox" name="">Casual Dining<br>
        <input type="checkbox" name="">Bill Upload
        <a href="#"><h5>show more...</h5></a>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title">Localities & Area</h6>

<input value type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
              <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
      </div>
      <div class="col-md-3">
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
      </div>
      <div class="col-md-3">
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
      </div>
      <div class="col-md-3">
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
        <a href="#"><p>Lorem Ipsem</p></a>
      </div>
    </div>
    </div>
        </div>
        
        
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>
     
    <div class="col-md-9 offer">
     <div class="row offer-row" style="background-image: url('images/1.png');">
      <!-- <div class="btn btn-danger" style="height: 40px; margin-top: 85px; margin-left: 70px;">Know more</div> -->
      <footer class="form-control text-white text-center sub-footer">Get 100% cashback on booking fee now!!!</footer>
      </div><br><br>
      <div class="row" style="margin-top: 0px !important;">

      <div id="carouselExampleControls0" class="carousel slide carousel-m" data-ride="carousel">
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/the4.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/the10.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev controls" href="#carouselExampleControls0" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next controls" href="#carouselExampleControls0" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
    <div class="card nonveg-card">
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>

    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href="#"><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
       <p class="card-text"><font color="gray"> Cuisine :</font><a class="decoration" href="#"> Chinese</a>,<a class="decoration" href=""> Continental</a>,<a class="decoration" href=""> Modern Indian</a>,<a class="decoration" href=""> North Indian</a>,<a class="decoration" href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div class="upload">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
        

<div class="row reserve">
        <div class="offer-banner"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger btn-reserve">RESERVE FOR FREE</button>
        </div>
  </div>
</div>
</div>

  <div class="row">
      <div id="carouselExampleControls1" class="carousel slide carousel-m" data-ride="carousel" >
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/the10.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img4.jpg"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/the4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev controls" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next controls" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
    <div class="card nonveg-card">
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>
    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href=""><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
        <p class="card-text"><font color="gray"> Cuisine :</font><a class="decoration" href="#"> Chinese</a>,<a class="decoration" href=""> Continental</a>,<a class="decoration" href=""> Modern Indian</a>,<a class="decoration" href=""> North Indian</a>,<a class="decoration" href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div class="upload">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
       <div class="row reserve">
        <div class="offer-banner"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger btn-reserve">RESERVE FOR FREE</button>
        </div>
  </div>
</div>





      <div id="carouselExampleControls1" class="carousel slide carousel-m" data-ride="carousel" >
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/the10.jpg" alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img4.jpg"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/the4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev controls" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next controls" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
    <div class="card nonveg-card">
      
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>
    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href=""><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
        <p class="card-text"><font color="gray"> Cuisine :</font><a class="decoration" href="#"> Chinese</a>,<a class="decoration" href=""> Continental</a>,<a class="decoration" href=""> Modern Indian</a>,<a class="decoration" href=""> North Indian</a>,<a class="decoration" href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div class="upload">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
       <div class="row reserve">
        <div class="offer-banner"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger btn-reserve">RESERVE FOR FREE</button>
        </div>
  </div>
</div>
  </div>
</div>
</div>
</div>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  <!-- End coding from here -->
  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>