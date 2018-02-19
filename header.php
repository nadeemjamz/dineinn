 <nav class="navbar navbar-expand-lg navbar-light bg-danger sticky-top">
  <a class="navbar-brand" href="index.php" style="color:#fff;"><img src="images/dineinn8.png" class="img-fluid p-o m-0"> </a>
<!--   <h4 class="mr-5">DineInn</h4> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ml-4">
        <a class="nav-link" href="#" style="color:#fff;">Party Booking <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ml-4">
        <a class="nav-link" href="#" style="color:#fff;">+91 8855472364</a>
      </li>
    </ul>
     <form class="form-inline my-2 my-lg-0 ml-3">
      <div class="nav-item dropdown ml-3">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;">
          Location
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Dharwad</a>
            <a class="dropdown-item" href="#">Hubli</a>
        </div>
      </div>
      <input class="form-control mr-sm-2" type="search" placeholder="Area,Location,etc..." aria-label="Search" style="width:100; display:inline-block">
      <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
      <div class="nav-item ml-4">
        <a class="nav-link" href="#" style="color:#fff;" data-toggle="modal" data-target="#exampleModal">Login</a>
      </div>
    </form>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalTitle">
                            Login / Sign Up
                        </h5>
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Mobile No. / Email ID</label>
                                <input type="text" class="text form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label for="email">Password</label>
                                <input type="password" class="text form-control">
                            </div> -->
                        </form>

                    </div>
                    <div class="modal-footer">
                      <div class="container text-center">
                        <button class="btn btn-danger btn-block">Continue</button>
                        <hr>
                    <h5>Or login via </h5>
                    <hr>
                    <button class="btn btn-primary btn-inline-block mx-3">  <i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</button>
                    <!-- <button class="btn btn-danger btn-inline-block mx-3"> <i class="fa fa-google" aria-hidden="true"></i> Sign in</button> -->

                    <!-- php for signup -->
                    <?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'user.php';

if(isset($_GET['code'])){
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    //Get user profile data from google
    $gpUserProfile = $google_oauthV2->userinfo->get();
    
    //Initialize User class
    $user = new User();
    
    //Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        // 'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        // 'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
    
    //Storing user data into session
    $_SESSION['userData'] = $userData;
    
    //Render facebook profile data
    if(!empty($userData)){
        $output = '<h1>Google+ Profile Details </h1>';
        $output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        $output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        $output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        $output .= '<br/>Email : ' . $userData['email'];
        // $output .= '<br/>Gender : ' . $userData['gender'];
        $output .= '<br/>Locale : ' . $userData['locale'];
        $output .= '<br/>Logged in with : Google';
        // $output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        $output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
    $authUrl = $gClient->createAuthUrl();
    $output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt="" style="width:250px;"/></a>';
}
?>

<div><?php echo $output; ?></div>
                    <!-- end of code signup -->
                    </div>
                    </div>
                    </div>

            </div>
</div>


