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

        <div class="panel-heading"><center> Add Registration</center></div>
        <?php
if(isset($_POST['addrg']))
{
 $username1=$_POST['username1'];
 $password=$_POST['password'];
 $regdate=$_POST['regdate'];
 $regtime=$_POST['regtime'];
 $bpid=$_POST['bpid'];
 $gid=$_POST['gid'];

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
 $result=$mysqli->query("INSERT INTO registration(USER_NAME,PASSWORD,REG_DATE,REG_TIME,BUSINESSPERSON_ID,GOODS_ID) VALUES('$username1','$password','$regdate','$regtime','$bpid','$gid')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('registration.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('record not addewd')
  window.location.replace('registratin.php')
  </script>
  "; 
}
}
?>



       
 
</div>
       
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header"><h3>Add Registration</h3></div>
                                    <div class="card-body">
                                      <?php
                                      if(isset($_POST['username1']))
                                      {
                                        $username1=$_POST['username1'];
                                      }
                                        if(isset($_POST['password']))
                                      {
                                        $password=$_POST['password'];
                                      }
                                        if(isset($_POST['regdate']))
                                      {
                                        $regdate=$_POST['regdate'];
                                      }
                                        if(isset($_POST['regtime']))
                                      {
                                        $regtime=$_POST['regtime'];
                                      }
                                        if(isset($_POST['bpid']))
                                      {
                                        $bpid=$_POST['bpid'];
                                      }
                                        if(isset($_POST['gid']))
                                      {
                                        $gid=$_POST['gid'];
                                      }
                                      

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="fname">Username</label>
                                                <input type="text" class="form-control" id="username1" placeholder="username" name="username1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname">Password</label>
                                                <input type="text" class="form-control" id="password" placeholder="password" name="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fno">Reg_Date</label>
                                                <input type="text" class="form-control" id="regdate" placeholder="regdate" name="regdate" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Reg_Time</label>
                                                <input type="text" class="form-control" id="regtime" placeholder="regtime" name="regtime" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Businessperson_ID</label>
                                                <input type="text" class="form-control" id="bpid" placeholder="Businessperson_ID" name="bpid" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fid">Goods_ID</label>
                                                <input type="text" class="form-control" id="gid" placeholder="Goods_ID" name="gid" required>
                                            </div>
                                           
                                            <button type="submit" name="addrg" class="btn btn-primary mr-2">Submit</button>
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