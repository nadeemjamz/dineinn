  <!doctype html>
<html lang="en">
  <head>
    <title>Header</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--styles css-->  
    <?php include_once "styles.php"; ?>
    <!--styles css--> 
  </head>
  <body style="background-color:#F4F4F4;">
 

 <nav class="navbar navbar-expand-lg navbar-light bg-danger sticky-top">
  <a class="navbar-brand" href="#" style="color:#fff;"><img src="images/logo.png" class="img-fluid"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item dropdown ml-4">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
          Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Dharwad</a>
            <a class="dropdown-item" href="#">Hubli</a>
        </div>
      </li>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Area,Location,etc..." aria-label="Search" style="width:600px;">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
    </form>
      <li class="nav-item ml-5">
        <a class="nav-link" href="#" style="color:#fff;">Party Booking <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-4">
        <a class="nav-link" href="#" style="color:#fff;" data-toggle="modal" data-target="#exampleModal">Login</a>
      </li>
      <li class="nav-item ml-4">
        <a class="nav-link" href="#" style="color:#fff;">+91 8855472364</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">
                            Login
                        </h5>
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Login ID</label>
                                <input type="text" class="text form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="text form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-block">Submit</button>
                    </div>
                </div>
            </div>
</div>


  <?php include_once "script.php"; ?>
  </body>
</html>