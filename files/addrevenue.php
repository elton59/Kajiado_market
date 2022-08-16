<?php
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
 $fname1=$_POST['fname1'];
 $lname1=$_POST['lname1'];
 $pno1=$_POST['pno1'];
 $email1=$_POST['email1'];
 $cid1=$_POST['cid1'];

 //host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";
$mysqli = new mysqli($host,$username,$password,$database);
 $result=$mysqli->query("INSERT INTO revenuecollectors(REVENUECOLLECTOR_ID,FIRST_NAME,LAST_NAME,PHONE_NO,EMAIL,CONFIRMATION_ID) VALUES('$rcid','$fname1','$lname1','$pno1','$email1','$cid1')")or die($mysqli->error);
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
                                        if(isset($_POST['rcid']))
                                      {
                                        $fname1=$_POST['rcid'];
                                      }
                                        if(isset($_POST['fname1']))
                                      {
                                        $fname1=$_POST['fname1'];
                                      }
                                        if(isset($_POST['lname1']))
                                      {
                                        $lname1=$_POST['lname1'];
                                      }
                                        if(isset($_POST['pno1']))
                                      {
                                        $pno1=$_POST['pno1'];
                                      }
                                        if(isset($_POST['email1']))
                                      {
                                        $email1=$_POST['email1'];
                                      }
                                        if(isset($_POST['cid1']))
                                      {
                                        $cid1=$_POST['cid1'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="fname1">First_Name</label>
                                                <input type="text" class="form-control" id="fname1" placeholder="firstname" name="fname1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname1">Last_Name</label>
                                                <input type="text" class="form-control" id="lname1" placeholder="lastname" name="lname1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pno1">Phone_No</label>
                                                <input type="text" class="form-control" id="pno1" placeholder="phonenumber" name="pno1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email1">Email</label>
                                                <input type="email" class="form-control" id="email1" placeholder="email" name="email1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cid1">Confirmation_ID</label>
                                                <input type="text" class="form-control" id="cid1" placeholder="confirmationid" name="cid1" required>
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