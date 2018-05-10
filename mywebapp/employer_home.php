<?php 
    require_once ('protected_access_check.php');
    require_once ('application/models/User.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>::Employer Dashboard::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Employer's dashboard, what they see as the first thing">
    <meta name="keywords" content="">

</head>
<body>
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
                ?>


            </div>
        </div>

    </div><!-- maincontent -->
   

</body>
</html>