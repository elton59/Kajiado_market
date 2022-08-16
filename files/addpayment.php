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

        <div class="panel-heading"><center> Add Payment</center></div>
        <?php
if(isset($_POST['addper']))
{
 $pid=$_POST['pid'];
 $mcode=$_POST['mcode'];
 $pdate=$_POST['pdate'];
 $ptime=$_POST['ptime'];
 $bpid1=$_POST['bpid1'];
 $cid=$_POST['cid'];

 //host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";
$mysqli = new mysqli($host,$username,$password,$database);
 $result=$mysqli->query("INSERT INTO payment(PAYMENT_ID,MPESA_CODE,PAYMENT_DATE,PAYMENT_TIME,BUSINESSPERSON_ID,CONFIRMATION_ID) VALUES('$pid','$mcode','$pdate','$ptime','$bpid1','$cid')")or die($mysqli->error);
 if($result)
 {
  echo"<script>alert('record added succesfully')
  window.location.replace('payment.php')
  </script>
  ";
 }
else
{
   echo"<script>alert('record not addewd')
  window.location.replace('payment.php')
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
                                      if(isset($_POST['pid']))
                                      {
                                        $pid=$_POST['pid'];
                                      }
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
                                        if(isset($_POST['cid']))
                                      {
                                        $cid=$_POST['cid'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST">
                                            <div class="form-group">
                                                <label for="pid">Payment_ID</label>
                                                <input type="text" class="form-control" id="pid" placeholder="paymentid" name="pid" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mcode">Mpesa_Code</label>
                                                <input type="text" class="form-control" id="mcode" placeholder="mpesacode" name="mcode" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pdate">Payment Date</label>
                                                <input type="number" class="form-control" id="pdate" placeholder="paymentdate" name="pdate" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ptime">Payment Time</label>
                                                <input type="text" class="form-control" id="ptime" placeholder="paymenttime" name="ptime" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bpid1">Businessperson_ID</label>
                                                <input type="text" class="form-control" id="bpid1" placeholder="Businessperson_ID" name="bpid1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cid">Confirmation_ID</label>
                                                <input type="text" class="form-control" id="cid" placeholder="confirmationid" name="cid" required>
                                            </div>
                                            <button type="submit" name="addper" class="btn btn-primary mr-2">Submit</button>
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