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

        <div class="panel-heading"><center> Add Revenue Collector</center></div>
        <?php
if(isset($_POST['addrev']))
{
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
  $uname=$_POST['uname'];
 $pno=$_POST['pno'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);
 $result=$mysqli->query("INSERT INTO revenuecollectors(FIRSTNAME,LASTNAME,USERNAME,PHONE_NO,EMAIL,PASSWORD) VALUES('$fname','$lname','$uname','$pno','$email','$pass')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('revenuecollectors.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('record not addewd')
  window.location.replace('revenuecollectors.php')
  </script>
  "; 
}
}
?>



       
 
</div>
       
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header"><h3>Add Revenue Collector</h3></div>
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
                                        if(isset($_POST['uname']))
                                      {
                                        $uname=$_POST['uname'];
                                      }
                                        if(isset($_POST['email']))
                                      {
                                        $email=$_POST['email'];
                                      }
                                        if(isset($_POST['pno']))
                                      {
                                        $pno=$_POST['pno'];
                                      }
                                        if(isset($_POST['pass']))
                                      {
                                        $pass=$_POST['pass'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="fname1">First_Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="firstname" name="fname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname1">Last_Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="lastname" name="lname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pno1">Username</label>
                                                <input type="text" class="form-control" id="pno1" placeholder="usernames" name="uname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pno1">Phone_No</label>
                                                <input type="number" class="form-control" id="pno" placeholder="phonenumber" name="pno"  pattern="[1-9]{1}[0-9]{9}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email1">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cid1">password</label>
                                                <input type="password" class="form-control" id="cid1" placeholder="password" name="pass" required>
                                            </div>
                                            <button type="submit" name="addrev" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>


    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>