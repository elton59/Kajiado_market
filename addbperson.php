<?php

 error_reporting(0);
include('conn.php');
include('header.php');
include('leftbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kajiado Market</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="ts-main-content">

	
</div>
<br>
<br>
<br>
<br>
<br>

<div class="content-wrapper">
	<div class="container-fluid" style="float: center">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">

    <div class="panel panel-success">

        <div class="panel-heading"><center> Add Business persons</center></div>
        <?php
if(isset($_POST['addbp']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $fno=$_POST['fno'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $fid=$_POST['fid'];
 $pid=$_POST['pid'];

//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);
$mysqli = new mysqli($host,$username,$password,$database);
 $result=$mysqli->query("INSERT INTO businessperson(FIRST_NAME,LAST_NAME,PHONE_NO,EMAIL,USER_NAME,FEEDBACK_ID,PAYMENT_ID) VALUES('$fname','$lname','$fno','$email','$username','$fid','$pid')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('businessperson.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('record not addewd')
  window.location.replace('businessperson.php')
  </script>
  "; 
}
}
?>



       
 
</div>
       
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header"><h3>Add Business persons</h3></div>
                                    <div class="card-body">
                                      <?php
                                      if(isset($_POST['fname']))
                                      {
                                        $fname=$_POST['fname'];
                                      }
                                        if(isset($_POST['lname']))
                                      {
                                        $lname=$_POST['lname'];
                                      }
                                        if(isset($_POST['fno']))
                                      {
                                        $fno=$_POST['fno'];
                                      }
                                        if(isset($_POST['email']))
                                      {
                                        $email=$_POST['email'];
                                      }
                                        if(isset($_POST['username']))
                                      {
                                        $username=$_POST['username'];
                                      }
                                        if(isset($_POST['fid']))
                                      {
                                        $fid=$_POST['fid'];
                                      }
                                        if(isset($_POST['pid']))
                                      {
                                        $pid=$_POST['pid'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="fname">Firstname</label>
                                                <input type="text" class="form-control" id="fname" placeholder="firstname" name="fname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname">Lastname</label>
                                                <input type="text" class="form-control" id="lname" placeholder="lastname" name="lname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fno">PhoneNumber</label>
                                                <input type="number" class="form-control" id="fno" placeholder="phonenumber" name="fno"  pattern="[1-9]{1}[0-9]{9}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fid">FeedbackID</label>
                                                <input type="text" class="form-control" id="fid" placeholder="feedbackid" name="fid" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pid">PaymentID</label>
                                                <input type="text" class="form-control" id="pid" placeholder="paymentid" name="pid" required>
                                            </div>
                                            <button type="submit" name="addbp" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>


    <div class="col-sm-2"></div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="files/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="files/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="files/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="files/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="files/plugins/screenfull/dist/screenfull.js"></script>
        <script src="files/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="files/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="files/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="files/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="files/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="files/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="files/plugins/moment/moment.js"></script>
        <script src="files/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="files/plugins/d3/dist/d3.min.js"></script>
        <script src="files/plugins/c3/c3.min.js"></script>
        <script src="files/js/tables.js"></script>
        <script src="files/js/widgets.js"></script>
        <script src="files/js/charts.js"></script>
        <script src="files/dist/js/theme.min.js"></script>
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