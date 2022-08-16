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
	<link rel="stylesheet" type="text/css" href="files/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="files/css/style.css">
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

        <div class="panel-heading"><center> Request for stalls</center></div>
        <?php
if(isset($_POST['upstall']))
{
 $sid=$_POST['sid'];
 $sname=$_POST['sname'];
 $slocation=$_POST['slocation'];
 $sbpid=$_POST['sbpid'];
 $smname=$_POST['smname'];
 $sbstatus=$_POST['sbstatus'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 
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
 $result=$mysqli->query("UPDATE stalls SET BUSINESSPERSON_ID='$sbpid',FIRST_NAME='$fname',LAST_NAME='$lname', STATUS='$sbstatus' WHERE STALL_ID='$sid'")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('succes')
  window.location.replace('addpayment.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('error processing your request')
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
                                  <?php
                                  $sid=$_GET['rsid'];
                                  $result=$mysqli->query("select * from stalls")or die($mysqli_error);
                                  while($row=$result->fetch_assoc())
                                  {
                                    $sname=$row['STALL_NAME'];
                                    $slocation=$row['LOCATION'];
                                    $sbpid=$row['BUSINESSPERSON_ID'];
                                    $fname=$row['FIRST_NAME'];
                                    $lname=$row['LAST_NAME'];
                                    $smname=$row['MARKET_NAME'];
                                  }
                                 
                                  ?>
                                    <div class="card-header"><h3>stall enquiry</h3></div>
                                    <div class="card-body">
                                      <?php
                                      if(isset($_POST['sid']))
                                      {
                                        $sid=$_POST['sid'];
                                      }
                                        if(isset($_POST['sname']))
                                      {
                                        $sname=$_POST['sname'];
                                      }
                                        if(isset($_POST['slocation']))
                                      {
                                        $slocation=$_POST['slocation'];
                                      }
                                       if(isset($_POST['fname']))
                                      {
                                        $fname=$_POST['fname'];
                                      }
                                       if(isset($_POST['lname']))
                                      {
                                        $lname=$_POST['lname'];
                                      }
                                        if(isset($_POST['sbpid']))
                                      {
                                        $sbpid=$_POST['sbpid'];
                                      }
                                     
                                        if(isset($_POST['smname']))
                                      {
                                        $smname=$_POST['smname'];
                                      }
                                        if(isset($_POST['sbstatus']))
                                      {
                                        $sbstatus=$_POST['sbstatus'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="sid">StallID</label>
                                                <input type="text" class="form-control" id="sid" placeholder="stallID" name="sid" value="<?php echo $sid?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label for="sname">Stallname</label>
                                                <input type="text" class="form-control" id="sname" placeholder="stallname" name="sname" value="<?php echo $sname?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label for="slocation">Location</label>
                                                <input type="text" class="form-control" id="slocation" placeholder="location" name="slocation" value="<?php echo $slocation ?>" readonly >
                                            </div>
                                            <div class="form-group">
                                                <label for="sbpid">BusinesspersonID</label>
                                                <input type="text" class="form-control" id="sbpid" placeholder="bussinesspersonID" name="sbpid"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sbpid">FirstName</label>
                                                <input type="text" class="form-control" id="sbpid" placeholder="Firstname" name="fname"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sbpid">LastName</label>
                                                <input type="text" class="form-control" id="sbpid" placeholder="lastname" name="lname"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="smname">Marketname</label>
                                                <input type="text" class="form-control" id="smname" placeholder="Marketname" name="smname"  value="<?php echo $smname ?>" readonly required>
                                            </div><div class="form-group">
                                                <label for="smname">Duration (Days)</label>
                                                <input type="text" class="form-control" id="smname" placeholder="Marketname" name=""  value="30 " readonly required>
                                            </div>
                                            <div class="form-group">
                                                <label for="smname">Marketname</label>
                                                <input type="text" class="form-control" id="smname" placeholder="Marketname" name="smname"  value="<?php echo $smname ?>" readonly required>
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control"   name="sbstatus" value="pending" required>
                                            </div>
                                         
                                            <button type="submit" name="upstall" class="btn btn-primary mr-2">Submit</button>
                                            <button class="btn btn-light">Cancel</button>
                                          </form>
                                    </div>
                                </div>
                            </div>
</div>

    <div class="col-sm-2"></div>
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
</div>
</body>
</html>