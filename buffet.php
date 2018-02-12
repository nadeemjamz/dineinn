  <!doctype html>
<html lang="en">
  <head>
    <title>Buffet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    
  </head>
  <body style="background-color:#F4F4F4;">
  <!--navbar-->
  <?php include_once "header.php"; ?>

   <div class="container">
  <!-- Start coding from here -->

 
    <div class="row">
      <!-- main right -->
      <div class="col-md-9">
        this is left
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <!-- here crousel -->
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
</div> 
   
     

            </div>
            <div class="col-md-7">
              <!-- here content -->
              <div class="title"><span style="font-weight: bold;columns: solid black;font-size: 20px;">Flechazo</span></div>
              <a href="#">Marathahalli, East Bangalore</a>
              <h5 Pt-2px>Rs:1300 <span style="color:gray; font-size: 15px;"> for two (approx.)</span></h5>
                <a href="#">North Indian, Mediterranean, Asian</a>
               
                <h6>Sat&nbsp; - 11:30 AM to 04:00 PM <span style="color: red;font-size: 15px;">(Closed Now)</span></h6>
                <h6 class="pl-5"> 06:30 PM to 01:00 AM</h6>
                

            <!-- here drop down -->

            <!-- close drop down -->

            <!-- img pop  -->
            <img id="myImg" src="https://images.pexels.com/photos/859933/pexels-photo-859933.jpeg?h=350&auto=compress&cs=tinysrgb" alt="Trolltunga, Norway" width="200" height="100">

<!-- The Modal -->
<div id="myModal" class="ad-modal">
  <span class="ad-close">&times</span>
  <img class="ad-modal-content" id="img01">
  <div id="ad-caption"></div>
</div>
            <!-- close pop -->            

            


            </div>
          </div>
        </div>

  <div class="w-100 " style="background-color: #eee;">
    <button type="button" class="bg-success p-2">#GIRF</button>
    <span class="pl-2">Get 50% off on Buffet. 1st - 28th Feb</span>
  </div>
  <br>
  
  <div class="w-100" style="background-color: #eee220;">
    <button type="button" class="bg-success p-2">SmartPay</button>
    <a href="#">pay your restaurant bill with the app and get 20% cashback on your account</a>
  </div>

  <div class="container pt-5">
    <div class="title">
      <h5>Great Indian Restaurant Festival 2018</h5>
      </div>
    <h6>Presented by </h6>
     

     <!-- cards -->
      <div class="row">
  <div  class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h5 class="card-title">50% off Veg Dinner Buff...</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Special title treatment</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
     <!-- cards end -->
  </div>



        
  </div>




      <!-- main left -->
      <div class="col">
        this is right
      </div>

   </div>

  <!-- End coding from here -->
</div> 

  <!--footer-->
  <?php include_once "footer.php"; ?>
  <!-- end of footer-->    
  <?php include_once "script.php"; ?>
  </body>
</html>