<?php 
    require_once ('protected_access_check.php');
    require_once ('application/models/User.php');
    require_once ('application/models/Job.php');
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cardcss.css">
<!--===============================================================================================-->	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<div class="topnav">
  				<a href="profile.php">Edit Profile</a>
  				<a href="postjob.php">Create New</a>
				<a href="#" onclick="remove()" >Remove Post</a>
				</div>
				<div class="text-center p-t-136">
					<a class="txt2">
					
					</a>
				</div>

			<div class="content">
				<div id = "cardso">

                </div>
			
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
<script>
	var jobs = <?php echo json_encode($jobData); ?>; 
function card(){
	
	
for(var i = 0; i < jobs.length; i++) {
	var form = document.createElement("form");
	form.method = "POST"
	form.action = "application/removePost.php"
	var div = document.createElement("div");
	div.className = "card";
	// var company = document.createElement("h1");
	// company.innerHTML = jobs[i].company;
	var title = document.createElement("p");
	title.className = "title";
	title.innerHTML = jobs[i].title;
	var body = document.createElement("p");
	body.innerHTML = jobs[i].body;
	var button = document.createElement("p");
	button.innerHTML = "<button name='apply'>Apply</button>";
	//div.appendChild(company);
	div.appendChild(title);
	div.appendChild(body);
	div.appendChild(button);
	form.appendChild(div);
	document.getElementById("cardso").append(form);

	}
}
window.onload = card;

function remove(){
var buttons = document.getElementsByName("apply");
for(var i = 0; i < buttons.length; i++){
	buttons[i].style.backgroundColor = "red";
	buttons[i].innerHTML = "Remove";
	buttons[i].value = jobs[i].id;
	buttons[i].onclick = function(e) { 
		submit();
    };
	}
}

</script>
</body>
</html>