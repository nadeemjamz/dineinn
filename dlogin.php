<?php
// include_once("php_includes/db_connect.php");
include_once("checkUserLoginStatus.php");
echo $user_ok;
if($user_ok) {
    header("location: $siteAddress/index.php?u=$log_username");
    exit();
}
?>
<?php

?>
<?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["uname"])){

	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
    // $uname = preg_replace('#[^a-z0-9.@]#i', '', $_POST['uname']);
    $uname = $_POST['uname'];
    
    if($uname == ""){
        echo "The form submission is missing values.";
        echo trim(ob_get_clean());
		exit();
	}

	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// -------------------------------------------
	$sql = "SELECT id, pNumber, email FROM login WHERE pNumber='$uname' OR email='$uname' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $sql_num_rows = mysqli_num_rows($query);

    if($sql_num_rows>0) {
        $row = mysqli_fetch_row($query);
    } else {
		echo "Incorrect contact number / E mail";
        echo trim(ob_get_clean());
        exit();
	}


        // $_SESSION['id'] = $userid;
		$_SESSION['phone'] = $uname;
        // $_SESSION['email'] = $email;
        
        // setcookie("id", $userid, strtotime( '+30 days' ), "/", "", "", TRUE);
		setcookie("phone", $uname, strtotime( '+30 days' ), "/", "", "", TRUE);
		// setcookie("email", $email, strtotime( '+30 days' ), "/", "", "", TRUE);


	// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
    $sql = "UPDATE login SET ip='$ip', loginDateTime=now() WHERE pNumber='$uname' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    // header("location: $site_address/DCentMASS_master/user/$usertype/$username");
    // header("location: http://localhost/SellMyClick/profile.php?u=$uname");
    
        
    
    
       echo "login_success";
        echo trim(ob_get_clean());
        exit();


          
    } 
	
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    
</head>
<body>
<form name="smclogin" id="smclogin" onSubmit="return false;" style="padding:20px;">
  <h2 style="margin-left:5px;">Login Here</h2><i>All the fields are required.</i>
  <br>
  
  
  
  <div class="input-group input-group-lg">
    <input id="username" type="text" onFocus="emptyElement('status')" class="form-control" placeholder="Please Enter email/contact number" style="border-radius: 0px; margin:5px;">
</div>
 

  


   

   <button class="btn btn-success btn-lg" id="loginbtn" onClick="login()" style="border-radius: 0px; margin-left:5px;"> Login </button>
  </form>


  <div class="alert alert-danger" role="alert" id="status" style="display:none; width:300px;"></div>




<!-- scripts -->
<?php include_once("scriptn.php"); ?>

  <script>
  
    function emptyElement(x){
	_(x).innerHTML = "";
	var status = _("status");
	status.style.display = "none";
}


function login(){
    var uname = _("username").value;
	var status = _("status");
	
	_("username").style.border = "1px solid #ccc";

    
	if (uname == "") {
		_("username").style.border = "2px solid #f60";
	}
  
	

	if( uname == ""){
		status.innerHTML = "Fill out all of the form data";
		status.style.display = "block";
	} else {
		_("loginbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "dlogin.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "login_success"){
					status.innerHTML = ajax.responseText;
					status.style.display = "block";
					_("loginbtn").style.display = "block";
				} else {
					alert("Successfully Loged In.");
					window.location = "index.php";
				}
	        }
        }
        ajax.send("uname="+uname);
	}
}
    </script>
</body>
</html>