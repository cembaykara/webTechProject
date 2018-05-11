<?php
require_once ('protected_access_check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ata$a | Create post</title>
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
                

            <div style="width:auto; margin:0 auto;" class="content">
                    

                <form id="postJob" action="application/postJob.php" method="POST">
                    <span class="login100-form-title">
                        Create post
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="data[title]" placeholder="title" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-id-card" aria-hidden="false"></i>
                        </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input">
                       <input class="input100" type="text" name="data[body]" placeholder="body" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-id-card" aria-hidden="false"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="reset" name="btnClear" value="Clear" class="login100-form-btn">
                            Clear
                        </button>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" name="btnSubmit" value="Post" class="login100-form-btn">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
                    
            
</body>

</html>