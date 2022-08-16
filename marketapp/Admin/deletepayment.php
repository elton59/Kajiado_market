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

        <div class="panel-heading"><center>Payment</center></div>

        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>PAYMENT_ID</th><th>MPESA_CODE</th><th>PAYMENT_DATE</th><th>PAYMENT_TIME</th><th>BUSSINESSPERSON_ID</th><th>MARKET_ID</th><th>CONFIRMATION_ID</th><th>STATUS</th><th>ACTION</th></tr>
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
                    <td>".$row['MARKET_ID']."</td>
                    <td>".$row['CONFIRMATION_ID']."</td>
                    <td>".$row['STATUS']."</td>
                    <td> <a href='deletepayment.php?dpid=$row[PAYMENT_ID]' class='btn btn-info'>edit<a>
                   <a href='delete.php? dpid=$row[PAYMENT_ID]' class='btn btn-danger'>delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>

   
  
      



    </div>
    <?php

  if(isset($_GET['dpid']))
  {
    $pid=$_GET['dpid'];
    $result=$mysqli->query("select * from payment where PAYMENT_ID=$pid")or die($mysqli->error);
    $row=$result->fetch_array();
    $mcode=$row['MPESA_CODE'];
    $pdate=$row['PAYMENT_DATE'];
    $ptime=$row['PAYMENT_TIME'];
    $bpid1=$row['BUSINESSPERSON_ID'];
    $mid=$row['MARKET_ID'];
    $cid=$row['CONFIRMATION_ID'];
    $status=$row['STATUS'];
    echo "success";
  }
  else
  {
   echo "records will be displayed here";
  }

  ?>
  
            <div class="card-header">
            <h3 class="card-title">update Drivers</h3>

          </div>
          <!--card body-->
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
                                       if(isset($_POST['mid']))
                                      {
                                        $mid=$_POST['mid'];
                                      }
                                        if(isset($_POST['cid']))
                                      {
                                        $cid=$_POST['cid'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST" action="updatepayment.php">
                                           <div class="form-group">
                                             <input type=hidden name="pid" value="<?php echo $_GET['pid'];?>"/>
                                           </div>
                                            <div class="form-group">
                                                <label for="mcode">Mpesa_Code</label>
                                                <input type="text" class="form-control" id="mcode" placeholder="mpesacode" name="mcode" value="<?php echo $mcode;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pdate">Payment Date</label>
                                                <input type="date" class="form-control" id="pdate" placeholder="paymentdate" name="pdate" value="<?php echo $pdate;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="ptime">Payment Time</label>
                                                <input type="time" class="form-control" id="ptime" placeholder="paymenttime" name="ptime" value="<?php echo $ptime;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bpid1">Businessperson_ID</label>
                                                <input type="text" class="form-control" id="bpid1" placeholder="Businessperson_ID" name="bpid1" value="<?php echo $bpid1;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="mid">Market_ID</label>
                                                <input type="text" class="form-control" id="mid" placeholder="market ID" name="mid" value="<?php echo $mid;?>"required>
                                            <div class="form-group">
                                                <label for="cid">Confirmation_ID</label>
                                                <input type="text" class="form-control" id="cid" placeholder="confirmationid" name="cid" value="<?php echo $cid;?>"required >
                                            </div>
                                             <input type="submit" class="btn btn-success" name="updatepayment" value="update"/>
                                          
                                          </form>
         
                          </div>
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>