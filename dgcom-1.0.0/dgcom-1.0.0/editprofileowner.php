<?php
session_start();


if (!isset($_SESSION['laundry_name'])) {
    header("Location: ownerlogin.html");
    exit();
}
$laundry_name = $_SESSION['laundry_name'];

?>
<?php
    $connect=mysqli_connect("localhost","root","","laundrybasket") or die("Connection failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LAUNDRY BASKET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-client_id" content="930620040289-lvqt88knopiknrluen06quv5d4k51bmg.apps.googleusercontent.com">


    <!-- Favicon -->
   <link rel="icon" href="img/logo.png" type="image/png" sizes="128x128">
	
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 15px 20px;
  font-size: 20px;
  cursor: pointer;
  
  position:relative;
  top:45px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
<center><a href="ownerhome.html" ><button class="btn"><i class="fa fa-home"></i></button></a></center>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<?php
        $query = " select * from owner_registration where laundry_name='$laundry_name'";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
				<form class="login100-form validate-form" action="editowner.php"  method="post">
					<span class="login100-form-title p-b-49">
						Edit Profile
					</span>

					<div class="wrap-input100 validate-input " data-validate = "Username is required">
						<span class="label-input100">Username <font color="red">*</font> </span>
						<input class="input100" type="text" name="user_name" id="user_name" placeholder="Enter username" readonly value="<?php
                                        echo $row['user_name'];
                                        ?>">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="email is required">
						<span class="label-input100">Email ID <font color="red">*</font></span>
						<input class="input100" type="email" name="email" id="email" placeholder="e.g. abc123@gmail.com" value="<?php
                                        echo $row['email'];
                                        ?>">
						<span class="focus-input100" ></span>
					</div>
					
				
                                        <div class="wrap-input100 validate-input " data-validate = "Laundry Name is required">
						<span class="label-input100">Laundry Name<font color="red">*</font></span>
						<input class="input100" type="text" name="laundry_name" id="laundry_name" placeholder="Enter laundry name" value="<?php
                                        echo $row['laundry_name'];
                                        ?>">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input " data-validate = "Location is required">
						<span class="label-input100">Location<font color="red">*</font></span>
						<input class="input100" type="text" name="location" id="location" placeholder="Enter location" value="<?php
                                        echo $row['location'];
                                        ?>">
						<span class="focus-input100" ></span>
					</div>
					<div class="wrap-input100 validate-input " data-validate = "Phone no. is required">
						<span class="label-input100">Phone no. <font color="red">*</font></span>
						<input class="input100" type="tel" name="phone_no" id="phone_no" placeholder="Enter phone no." value="<?php
                                        echo $row['phone_no'];
                                        ?>"> 
						<span class="focus-input100" ></span>
					</div>
					<br>
					<br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" id="submit" name="submit">
								Edit
							</button>
						</div>
					</div>

					<?php
        }
        ?>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>


</body>
</html>
?>