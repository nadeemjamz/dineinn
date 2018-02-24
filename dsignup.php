<?php
//include_once("checkLoginStatus.php");
include_once("php_includes/db_connect.php");
// if($user_ok == true){
// 	header("location: ".$site_address);
//     exit();
// }
?><?php
// Ajax calls this EMAIL CHECK code to execute
if(isset($_POST["emailcheck"])){
	$email = $_POST['emailcheck'];
	$sql = "SELECT id FROM login WHERE email='$email' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $email_check = mysqli_num_rows($query);
    
    if ($email_check < 1) {
	    exit();
    } else {
	    echo '<strong style="color:#F00;">' . $email . ' is taken</strong>';
	    exit();
    }
}
if(isset($_POST["unamecheck"])){
	$uname = $_POST['unamecheck'];

$sql = "SELECT id FROM login WHERE pNumber='$uname' LIMIT 1";
$query = mysqli_query($connect_db, $sql);
$uname_check = mysqli_num_rows($query);

if($uname_check < 1)
{
  exit();
}else {
  echo '<strong style="color:#F00;">' . $uname . ' is taken</strong>';
  exit();
 }
}      
?><?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["uname"])){
	// CONNECT TO THE DATABASE
	
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
    $uname = preg_replace('#[^a-z0-9]#i', '', $_POST['uname']);
    
	$emai = mysqli_real_escape_string($connect_db, $_POST['emai']);
    
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// -------------------------------------------
	$sql = "SELECT id FROM login WHERE email='$emai' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
	$e_check = mysqli_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($uname == "" ||  $emai == ""){
		echo "The form submission is missing values.";
        exit();
	} else if ($e_check > 0){
        echo "That email address is already in use.";
        exit();
	}  else {
	
		$sql = "INSERT INTO `signup` (`pNumber`,`email`) 
		VALUES ('$uname', '$emai')";
		$query = mysqli_query($connect_db, $sql);
		$uid = mysqli_insert_id($connect_db);


		$sql = "INSERT INTO `login` (`pNUmber`, `email`, `signe_up_dateTime`, `loginDateTime`, `active`, `ip`) 
		VALUES ('$uname', '$emai', now(), now(), '0','$ip');";
		$query = mysqli_query($connect_db, $sql);
		$uid = mysqli_insert_id($connect_db);

		
		echo "signup_success";
		echo trim(ob_get_clean());
		exit();
	}
	exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMC</title>

    
</head>
<body>
<form name="signupform" id="signupform" onSubmit="return false;" style="padding:20px;">
  <h2 style="margin-left:5px;"> SMC Sign Up</h2><i>All the fields are required.</i>
  <br>
  
  <div class="input-group input-group-lg">
    <input id="contact" type="text" onBlur="checkuname()" onFocus="emptyElement('status')" onKeyUp="restrict('contact')"  class="form-control" placeholder=" Enter contact number" style="border-radius: 0px; margin:5px;">
   </div>
   </div><span id="unamestatus" ></span>

 

   <div class="input-group input-group-lg">
    <input class="form-control" placeholder="E-mail address" onBlur="checkemail()" id="email" type="text" onFocus="emptyElement('status')" onKeyUp="restrict('email')"  style="border-radius: 0px; margin:5px;">
   </div><span id="emailstatus" ></span>


 
 
 
    <button class="btn btn-success btn-lg" id="signupbtn" onClick="signup()" style="border-radius: 0px; margin-left:5px;">Create Account </button>
  </form>


  <div class="alert alert-danger" role="alert" id="status" style="display:none; width:300px;"></div>




<!-- scripts -->
<?php include_once("scriptn.php"); ?>

  <script>
    function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	} else if(elem == "contact"){
		rx = /[^0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}
    function emptyElement(x){
	_(x).innerHTML = "";
	var status = _("status");
	status.style.display = "none";
}
function checkemail(){
	var u = _("email").value;
	if(u != ""){
		_("emailstatus").innerHTML = 'checking ...';
		var ajax = ajaxObj("POST", "dsignup.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            _("emailstatus").innerHTML = ajax.responseText;
	        }
        }
        ajax.send("emailcheck="+u);
	}
}

function checkuname(){
	var t = _("contact").value;
	if(t != "")
	{
		_("unamestatus").innerHtml = 'checking...';
		var ajax = ajaxObj("POST", "dsignup.php");
		ajax.onreadystatechange = function()
	{
		if(ajaxReturn(ajax)== true){
			_("unamestatus").innerHTML = ajax.responseText;
		}
	}
		ajax.send("unamecheck="+t);
	}
	
}

function signup(){
	var uname = _("contact").value;

	var emai = _("email").value;
    
    var status = _("status");
	
	_("contact").style.border = "1px solid #ccc";
    
	_("email").style.border = "1px solid #ccc";


    
	if (uname == "") {
		_("contact").style.border = "2px solid #f60";
	}
   
	if (emai == "") {
		_("email").style.border = "2px solid #f60";
	}

 
	if(uname == "" || emai == "" ){
		status.innerHTML = "Fill out all of the form data";
		status.style.display = "block";
	} else {
		_("signupbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "dsignup.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					status.style.display = "block";
					_("signupbtn").style.display = "block";
				} else {
					alert("Sign Up successful! You may Login now.");
					window.location = "dlogin.php";
				}
	        }
        }
        ajax.send("uname="+uname+"&emai="+emai);
	}
	

	
}
    </script>
</body>
</html>