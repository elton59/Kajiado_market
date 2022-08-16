<?php
session_start();
include('loghead.php');

//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);

   if(isset($_POST['login']))
{
    $uname=$_POST['uname'];	
    $upass=$_POST['upass'];
   

$result = $mysqli->query("SELECT * FROM businessperson where username='$uname' AND  password='$upass' AND status='approved' LIMIT 1") or die($mysqli->error);
if (mysqli_num_rows($result) == 1 )
{
$row=$result->fetch_assoc();
$bpid=$row['BUSINESSPERSON_ID'];
$status=$row['STATUS'];
$_SESSION['uname']=$row['USERNAME'];
$_SESSION['bpid']=$row['BUSINESSPERSON_ID'];
{
echo 
'<script>alert("'.$_SESSION['uname'].'");
               window.location.replace("main.php");
        </script>';
exit();
}
}
else
{
echo '<script>alert("Login failed");
                window.location.replace("index.php")
        </script>';
exit();
}
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>kajiado market</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="files/favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="files/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="files/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="files/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="files/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="files/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="files/dist/css/theme.min.css">
        <script src="marketapp/Admin/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image:url('files/src/img/market.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="#"><img src="src/img/brand.svg" alt=""></a>
                            </div>
                         
                           
                            <form  method="POST" action="index.php">
                               

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="username" name="uname" required  >
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required name="upass">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <input type="submit" class="btn btn-theme" name="login" value="sign in">
                                </div>
                            </form>
                            <div class="register">
                                <p>Don't have an account? <a href="signup.php">Create an account</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="Admin/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="files//plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="files/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="files//plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="files/plugins/screenfull/dist/screenfull.js"></script>
        <script src="files/dist/js/theme.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
