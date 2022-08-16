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

        <div class="panel-heading"><center>Payment</center></div>
           <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">

  </ol>
</div>
        <div class="panel-body">
         <table id="example2" class="table table-responsive table-hover">
                      <thead>
                        <tr><th>PAYMENT_ID</th><th>MPESA_CODE</th><th>PAYMENT_DATE</th><th>PAYMENT_TIME</th><th>BUSSINESSPERSON_ID</th><th>AMOUNT</th><th>STATUS</th></tr>
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
                    <td>".$row['AMOUNT']."</td>
                    <td>".$row['STATUS']."</td>
                   
                    "
                  ;}
            ?>
</table>
<td><a href='taxpaymentreport.php' class='btn btn-danger'>Export to PDF</a></td>
      



    </div>
    <?php

    if(isset($_GET['apid']))
  {
    $payment_id=$_GET['apid'];
    $result = $mysqli->query("UPDATE payment SET STATUS= 'approved' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjpid']))
  {
    $payment_id=$_GET['rjpid'];
    $result = $mysqli->query("UPDATE payment SET STATUS= 'rejected' WHERE PAYMENT_ID = $payment_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>