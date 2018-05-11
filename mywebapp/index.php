<?php
session_start();
if($_SESSION['isLoggedIn']){
	header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ata$a | Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="css" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<style>
	.slideBanner {display:none;}
	</style>
<!--===============================================================================================-->
</head>
<body>
<div class="w3-content w3-section" style="max-height:200px">
	<img class="photoSlide" src="images/slidebanner/boss.png" style="max-height: 200px; height:80%; width:100%">
	<img class="photoSlide" src="images/slidebanner/worker1.png" style="max-height: 200px; height:80%; width:100%">
	<img class="photoSlide" src="images/slidebanner/worker2.png" style="max-height: 200px; height:80%; width:100%">
	<img class="photoSlide" src="images/slidebanner/worker3.png" style="max-height: 200px; height:80%; width:100%">
</div>


	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Welcome to Ata$a
					</span>
				  <div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" onclick="location.href='login.php'">
							Login
						</button>
					</div>
					  <div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" onclick="location.href='signup.html'">
							Sign-up
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
	<script src="js/slidebanner.js"></script>
<!--===============================================================================================-->

</body>
</html>