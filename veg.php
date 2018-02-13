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
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
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
  margin-top: -1px; /* Prevent double borders */
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




.col-md-3 a:hover
{
   text-decoration: none;
}

p,h1,h2,h3,h4,h5,h6
{
  color: grey;
}

</style>

  </head>
  <body style="background-color:#F4F4F4;">
  <!--navbar-->
  <?php include_once "header.php"; ?>


  <!-- Start coding from here -->
        <div class="col-md-1"></div>
         <div class="col-md-10">
  <div class="container-fliud">
      <div class="row">
           <div class="row">
             <div class="col-md-3" style="background-color: white;"><h6>Quick Filters</h6>

    <h6>Localities & Area</h6>
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
              <div class="col-md-9">Best Pure Veg Restaurants </div>
           </div>
         </div>
          <div class="col-md-1"></div>
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