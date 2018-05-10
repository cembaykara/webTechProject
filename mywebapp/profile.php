<?php
require_once ('protected_access_check.php');
require_once ('application/models/User.php');

/**
 * @var $userData User
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ata$a | profile</title>
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="text-center p-t-136">
					<a class="txt2">
					<?php
                	if (isset($_SESSION['error_message'])) {
                    	echo '<p>' . $_SESSION['error_message'] . '</p>';
                	} elseif (isset($_SESSION['success_message'])) {
                    	echo '<p>' . $_SESSION['success_message'] . '</p>';
                	}
                	?>
							
					</a>
				</div>

			<div class="content">
					
				<form id="updateForm" class="login100-form validate-form" action="application/updateHandler.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Profile
					</span>

					<input type="hidden" name="data[id]" value="<?= $userData['id']; ?>"/>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="data[email]" value="<?= $userData['email']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="false"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="false"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Update
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="logout.php">
							logout
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<form id="updateForm" class="login100-form validate-form" action="application/updateHandler.php" method="POST" enctype="multipart/form-data">
					<span class="login100-form-title">
						Profile
					</span>

					<input type="hidden" name="data[id]" value="<?= $userData['id']; ?>"/>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="data[email]" value="<?= $userData['email']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="false"></i>
						</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="false"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Update
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="logout.php">
							logout
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
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

<?php
unset($_SESSION['error_message']);
unset($_SESSION['success_message']);
?>
</body>
</html>