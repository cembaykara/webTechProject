<?php 
    require_once ('protected_access_check.php');
    require_once ('application/models/User.php');
    require_once ('application/models/Job.php');

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>::Employer Dashboard::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Employer's dashboard, what they see as the first thing">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/cardcss.css">


</head>
<body>
        <div>

                <?php
                if (isset($_SESSION['error_message'])) {
                    echo '<p>' . $_SESSION['error_message'] . '</p>';
                } elseif (isset($_SESSION['success_message'])) {
                    echo '<p>' . $_SESSION['success_message'] . '</p>';
                }
                ?>
                <a href="/mywebapp/logout.php">Logout</a>
                <a href="/mywebapp/profile.php">Edit your profile</a>
                <a href="/mywebapp/postjob.php">Add a new job</a>
 

                <?php
                    echo "$userData[firstname]";
                    echo "</br>";
                    $firstjob = $jobData[0];
                    echo "$firstjob[title]";
                
                ?>


        </div>
     
   

</body>
</html>