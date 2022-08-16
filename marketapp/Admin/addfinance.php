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

        <div class="panel-heading"><center> Add Finance</center></div>
        <?php
if(isset($_POST['addfin']))
{

  $uname=$_POST['uname'];

 $email=$_POST['email'];
 $password=$_POST['password'];

//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);
 $result=$mysqli->query("INSERT INTO finance(USERNAME,EMAIL,PASSWORD) VALUES('$uname','$email','password')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('finance.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('record not addewd')
  window.location.replace('finance.php')
  </script>
  "; 
}
}
?>



       
 
</div>
       
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header"><h3>Add Finance Manager</h3></div>
                                    <div class="card-body">
                                      <?php
                                      
                                      
                                        if(isset($_POST['uname']))
                                      {
                                        $uname=$_POST['uname'];
                                      }
                                        if(isset($_POST['email']))
                                      {
                                        $email=$_POST['email'];
                                      }
                                       
                                      
                                        if(isset($_POST['password']))
                                      {
                                        $password=$_POST['password'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="fname1">Username</label>
                                                <input type="text" class="form-control" id="fname" placeholder="firstname" name="uname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname1">Email</label>
                                                <input type="text" class="form-control" id="lname" placeholder="email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pno1">Password</label>
                                                <input type="text" class="form-control" id="pno1" placeholder="usernames" name="password" required>
                                            </div>
                                           
                                            <button type="submit" name="addfin" class="btn btn-primary mr-2">Submit</button>
                                            <button rype="reset" class="btn btn-light">Cancel</button>
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