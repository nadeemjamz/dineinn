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
<div class="container" >
<!--   <div class="row" style="background-image: url('images/ccc.jpeg');">
  </div> -->
<!--   <h1> Non-Veg </h1> -->
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6">
      <div class="jumbotron" style="background-color: #DCDCDC; margin-top: 39px; height: 1000px;" >
        <h4>Quick Filters</h4>
        <input type="checkbox" name="">50% OFF Food<br>
        <input type="checkbox" name="">50% OFF Alchohol<br>
        <input type="checkbox" name="">50% OFF Buffet<br>
        <input type="checkbox" name="">

    <h4>Localities & Area</h4>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="height: 35px;">

<ul id="myUL" style="line-height: 10px;">
  <li><a href="#">Adele</a></li>
  <li><a href="#">Agnes</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

<li><a href="#" data-toggle="modal" data-target="#myModal" style="color: blue;">Show More...</a></li>
 
</ul>

<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title">Localities & Area</h6>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" style="height: 30px; width: 70%; margin-left: 20px;">
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
     
    <div class="col-lg-9 col-md-9 col-sm-6" style="margin-top: 40px;">
     <div class="row" style="width: 51.5rem; height: 213px; background-image: url('images/ppp.png'); border-radius: 4px;">
      <div class="btn btn-danger" style="height: 40px; margin-top: 85px; margin-left: 70px;">Know more</div>
      <footer style="background-color: red; height: 35px; margin-top: 55px;" class="form-control text-white text-center">Get 100% cashback on booking fee powered by @altaf</footer>
      </div><br>
      <div class="row" style="margin-top: 0px !important;">

      <div id="carouselExampleControls0" class="carousel slide" data-ride="carousel" style="width:280px; height: 269px;">
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
  <a class="carousel-control-prev" href="#carouselExampleControls0" role="button" data-slide="prev" style="padding-bottom: 50px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls0" role="button" data-slide="next" style="padding-bottom: 50px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
    <div class="card" style="width: 34rem; height: 213px;">
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>
  <!--   <div class="jumbotron" style=" height:1px; background-color:red; position: absolute; overflow-wrap: normal; margin-left: 440px; margin-bottom: 60px;">
  4.6   
</div> -->
    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href=""><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
       <p class="card-text"><font color="gray"> Cuisine :</font><a href=""> Chinese</a>,<a href=""> Continental</a>,<a href=""> Modern Indian</a>,<a href=""> North Indian</a>,<a href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div style="background-color: green; font-size: 13px; margin-bottom: 15px;">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
        

<div class="row" style="padding-left: 15px;">
        <div style="border-style:groove; width: 71%;"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger" style="float: right; margin-left: ;">RESERVE FOR FREE</button>
        </div>
  </div>
</div>



    
  </div>
  <div class="row">
      <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel" style="width:280px; height: 269px;">
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/the10.jpg" alt="First slide" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img4.jpg" style="width:100%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/the4.jpg" alt="Third slide" style="width:100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev" style="padding-bottom: 50px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next" style="padding-bottom: 50px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
    <div class="card" style="width: 34rem; height: 213px;">
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>
    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href=""><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
       <p class="card-text"><font color="gray"> Cuisine :</font><a href=""> Chinese</a>,<a href=""> Continental</a>,<a href=""> Modern Indian</a>,<a href=""> North Indian</a>,<a href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div style="background-color: green; font-size: 13px; margin-bottom: 15px;">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
       <div class="row" style="padding-left: 15px;">
        <div style="border-style:groove; width: 71%;"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger" style="float: right; margin-left: ;">RESERVE FOR FREE</button>
        </div>
  </div>
</div>





<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" style="width:280px; height: 269px;">
  <div class="carousel-inner"> 
    <div class="carousel-item active">
      <img class="d-block" src="images/img5.jpg" alt="First slide" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img6.jpg" style="width:100%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="images/img7.jpg" alt="Third slide" style="width:100%;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev" style="padding-bottom: 50px;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next" style="padding-bottom: 50px;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>    
<div class="card" style="width: 34rem; height: 213px;">
  
  <div class="card-body">
    <h5 class="card-title">The London Curry House</h5>
    <p class="card-text"><a href=""><font color="gray"> Race Course Road,</font></a><a href=""><font color="gray"> West Bangalore</font></a></p>
    <p class="card-text"><font color="gray"> Cost for two :</font>1500<font color="gray">(approx)|</font><a href="#"><font color="black"> view menu</font></a></p>
       <p class="card-text"><font color="gray"> Cuisine :</font><a href=""> Chinese</a>,<a href=""> Continental</a>,<a href=""> Modern Indian</a>,<a href=""> North Indian</a>,<a href=""> Pizza</a></p>
  <!--      <button class="btn-success" style="height: 22px;">UPLOAD BILL</button><input type="text" name="" placeholder="Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)" readonly="" style="width: 400px; height: 22px;"/> -->
     <div style="background-color: green; font-size: 13px; margin-bottom: 15px; ">UPLOAD BILL<font color="white">  Additional 20% off on uploading your bill via Dineout app (upto Rs. 200)</font></div>
<div class="row" style="padding-left: 15px;">
        <div style="border-style:groove; width: 71%;"><font color="green">&nbsp;&nbsp;&nbsp;GIRF: Flat 50% Off Food from 1st - 28th Feb</font></div><button class="btn-danger" style="float: right; margin-left: ;">RESERVE FOR FREE</button>
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