<?php

session_start();
error_reporting(0);
include('conn.php');
include('header.php');
include('leftbar.php');
$output ='';

$result=$mysqli->query("select *   from payment where STATUS='approved'") or die(mysqli_error($mysqli));
$query="SELECT sum(AMOUNT) AS total from payment" ;
$result2=$mysqli->query($query) or die(mysqli_error($mysqli));
$row1=$result2->fetch_assoc();


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

        <div class="panel-heading"><center>Payment</center></div>

           <div class="col-sm-6">
  
</div>
        <div class="panel-body">
         <table id="example2" class="table table-responsive table-hover">
          <form id="signup_form" method="POST" class="login100-form">
                 
                                     <div class="form-group">
                                      
                                        <label>Total cash From stalls  KSH</label>
                                        <?php
                                     //host name
//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);
                               $output ='';
                           if(isset($_SESSION['uname']))
                              {
                               $result=$mysqli->query("select *  from payment where STATUS='approved'") or die(mysqli_error($mysqli));
                               $query="SELECT sum(AMOUNT) AS total from payment where STATUS='approved'" ;
                               $result2=$mysqli->query($query) or die(mysqli_error($mysqli));
                               $row1=$result2->fetch_assoc();
                              
                                        if (mysqli_num_rows($result) > 0) {      
                                   $result=$mysqli->query("select * from payment where STATUS='approved' ")or die($mysqli->error);
                                         
                                         $total=$row1["total"];
                                        
                                     }
                                   }
                                   else
                                   {

                                   }
                                 
                                        ?>

                                        <input class="input form-control input-borders" type="text" name="ptotal" id="ptotal" value="<?php echo" $total"?>">
                                    </div>
                                   
                                    
                                    
            
                                    
                                
                </form>
                     <tr><th>PAYMENT_ID</th><th>MPESA_CODE</th><th>PAYMENT_DATE</th><th>PAYMENT_TIME</th><th>BUSSINESSPERSON_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>MONTH</th><th>AMOUNT</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>


                                        
                      <?php
                  $result=$mysqli->query("select * from payment")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['PAYMENT_ID']."</td>
                    <td>".$row['MPESA_CODE']."</td>
                    <td>".$row['PAYMENT_DATE']."</td>
                    <td>".$row['PAYMENT_TIME']."</td>
                    <td>".$row['BUSINESSPERSON_ID']."</td>
                    <td>".$row['FIRST_NAME']."</td>
                    <td>".$row['LAST_NAME']."</td>
                    <td>".$row['MONTH']."</td>
                
                    <td>".$row['AMOUNT']."</td>
                    <td>".$row['STATUS']."</td>

                    <td> <a href='payment.php?apid=$row[PAYMENT_ID]' class='btn btn-success'>Approve<a>
                   <a href='payment.php?rpid=$row[PAYMENT_ID]' class='btn btn-danger'>Reject<a></td>
                    "

                  ;}
            ?>

</table>
<td><a href='paymentreport.php' class='btn btn-danger'>Export to PDF</a></td>
      



    </div>
    <?php

    if(isset($_GET['apid']))
  {
    $payment_id=$_GET['apid'];
    $result = $mysqli->query("UPDATE payment SET STATUS= 'approved' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
      
  
  }
     if(isset($_GET['rpid']))
  {
    $payment_id=$_GET['rpid'];
    $result = $mysqli->query("UPDATE payment SET STATUS= 'rejected' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
      
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
<div class="panel panel-success">

        <div class="panel-heading"><center>tax Payment</center></div>

           <div class="col-sm-6">
      
  
</div>
        <div class="panel-body">
         <table id="example2" class="table table-responsive table-hover">
                      <thead>
                        <tr><th>PAYMENT_ID</th><th>MPESA_CODE</th><th>PAYMENT_DATE</th><th>PAYMENT_TIME</th><th>BUSSINESSPERSON_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>MONTH</th><th>AMOUNT</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from taxpayment")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['PAYMENT_ID']."</td>
                    <td>".$row['MPESA_CODE']."</td>
                    <td>".$row['PAYMENT_DATE']."</td>
                    <td>".$row['PAYMENT_TIME']."</td>
                    <td>".$row['BUSINESSPERSON_ID']."</td>
                     <td>".$row['FIRST_NAME']."</td>
                    <td>".$row['LAST_NAME']."</td>
                    <td>".$row['MONTH']."</td>
                    <td>".$row['AMOUNT']."</td>
                    <td>".$row['STATUS']."</td>
                   <td> <a href='payment.php?atpid=$row[PAYMENT_ID]' class='btn btn-success'>Approve<a>
                   <a href='payment.php?rjtpid=$row[PAYMENT_ID]' class='btn btn-danger'>Reject<a></td>
                    "
                  ;}
            ?>
</table>
<td><a href='paymentreport2.php' class='btn btn-danger'>Export to PDF</a></td>
      



    </div>
    <?php

    if(isset($_GET['atpid']))
  {
    $payment_id=$_GET['atpid'];
    $result = $mysqli->query("UPDATE taxpayment SET STATUS= 'approved' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjtpid']))
  {
    $payment_id=$_GET['rjtpid'];
    $result = $mysqli->query("UPDATE taxpayment SET STATUS= 'rejected' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../files/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="../files/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="../files/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../files/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="../files/plugins/screenfull/dist/screenfull.js"></script>
        <script src="../files/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../files/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../files/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="../files/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="../files/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="../files/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../files/plugins/moment/moment.js"></script>
        <script src="../files/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="../files/plugins/d3/dist/d3.min.js"></script>
        <script src="../files/plugins/c3/c3.min.js"></script>
        <script src="../files/js/tables.js"></script>
        <script src="../files/js/widgets.js"></script>
        <script src="../files/js/charts.js"></script>
        <script src="../files/dist/js/theme.min.js"></script>
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