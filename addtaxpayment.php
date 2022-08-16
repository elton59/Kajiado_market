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
<div>
  <p style="color:green;text-align:center">LIPA NA MPESA <img src="images.ico"/></p>
  <p style="color:black;text-align:center"><span style="color:green">BUSSINESS NO:</span>33456</p> 
   <p style="color:black;text-align:center"><span style="color:green">ACCOUNT NO:</span>Your Phone Number</p>
 
</div>
    <div class="panel panel-success">
     
        <div class="panel-heading"><center><h1> It is mandatory that you fill in following form after payment</h1  ></center></div>
        <?php
if(isset($_POST['pay']))
{
 
 $mcode=$_POST['mcode'];
 $pdate=$_POST['pdate'];
 $ptime=$_POST['ptime'];
 $bpid1=$_POST['bpid1'];
 $amnt=$_POST['amnt'];
$fname=$_POST['fname'];
 $lname=$_POST['lname'];
$month=$_POST['month'];
 $host = "localhost";
//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);
$result=$mysqli->query("INSERT INTO taxpayment(MPESA_CODE,PAYMENT_DATE,PAYMENT_TIME,BUSINESSPERSON_ID,FIRST_NAME,LAST_NAME,MONTH,AMOUNT) VALUES('$mcode','$pdate','$ptime','$bpid1','$fname','$lname','$month','$amnt')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('taxpayment.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('error processing your request')
  window.location.replace('taxpayment.php')
  </script>
  "; 
}
}
?>



       
 
</div>
       
                            <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                      
                                    </div>
                                          <?php
                                     
                                        if(isset($_POST['mcode']))
                                      {
                                        $mcode=$_POST['mcode'];
                                      }
                                        if(isset($_POST['pdate']))
                                      {
                                        $pdate=$_POST['pdate'];
                                      }
                                        if(isset($_POST['ptime']))
                                      {
                                        $ptime=$_POST['ptime'];
                                      }
                                        if(isset($_POST['bpid1']))
                                      {
                                        $bpid1=$_POST['bpid1'];
                                      }
                                        if(isset($_POST['bpid1']))
                                      {
                                        $bpid1=$_POST['bpid1'];
                                      }
                                        if(isset($_POST['amnt']))
                                      {
                                        $amnt=$_POST['amnt'];
                                      }
                                        if(isset($_POST['fname']))
                                      {
                                        $fname=$_POST['fname'];
                                      }
                                        if(isset($_POST['lname']))
                                      {
                                        $lname=$_POST['lname'];
                                      }
                                        if(isset($_POST['month']))
                                      {
                                        $month=$_POST['month'];
                                      }

                                      ?>
                                    <div class="card-body">
                                        <form ="forms-sample" method="POST">
                                           
                                                
                                               
                                           
                                           
                                                <label for="mcode">Mpesa_Code</label>
                                                <input type="text" class="form-control" id="mcode" placeholder="mpesacode" name="mcode" required>
                                           
                                        
                                                <label for="pdate">Payment Date</label>
                                                <input type="date" class="form-control" id="pdate" placeholder="paymentdate" name="pdate" required>
                                         
                                            
                                                <label for="ptime">Payment Time</label>
                                                <input type="time" class="form-control" id="ptime" placeholder="paymenttime" name="ptime" required>
                                            
                                            
                                                <label for="bpid1">Businessperson_ID</label>
                                                <input type="text" class="form-control" id="bpid1" placeholder="Businessperson_ID" name="bpid1" required>
                                            
                                             <label for="bpid1">FIRST_NAME</label>
                                                <input type="text" class="form-control" id="bpid1" placeholder="first name" name="fname" required>
                                                <label for="bpid1">LAST_NAME</label>
                                                <input type="text" class="form-control" id="bpid1" placeholder="last name" name="lname" required>
                                                <label for="MONTH">SELECT MONTH</label><br/>
                                                  <select class="input100"  name="month" required/>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>  
                          <option value="September">September</option>
                          <option value="october">October</option> 
                          <option value="November">November</option> 
                          <option value="December">December</option>                      </select><br/>
                                                <label for="amnt">AMOUNT</label>
                                                <input type="int" class="form-control" id="amnt" name="amnt"  value="3000" readonly required >
                                           
                                            <div class="form-group">
                                            <input type="submit" name="pay" class="btn btn-primary mr-2" value="Submit"/>
                                            <input type ="reset" class="btn btn-light" value="Cancel">
                                          
                                          </form>
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