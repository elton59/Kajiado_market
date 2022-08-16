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

        <div class="panel-heading"><center>Business Person</center></div>

        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>BUSINESSPERSON_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>PHONE_NO</th><th>EMAIL</th><th>USER_NAME</th><th>FEEDBACK_ID</th><th>PAYMENT_ID</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from businessperson")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['BUSINESSPERSON_ID']."</td>
                    <td>".$row['FIRST_NAME']."</td>
                    <td>".$row['LAST_NAME']."</td>
                    <td>".$row['PHONE_NO']."</td>
                    <td>".$row['EMAIL']."</td>
                    <td>".$row['USER_NAME']."</td>
                    <td>".$row['FEEDBACK_ID']."</td>
                    <td>".$row['PAYMENT_ID']."</td>
                    <td>".$row['STATUS']."</td>
                    <td> <a href='deletebp.php?dbpid=$row[BUSINESSPERSON_ID]' class='btn btn-info'>edit<a>
                   <a href='delete.php? dpid=$row[BUSINESSPERSON_ID]' class='btn btn-danger'>delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>

   
  
      



    </div>
    <?php

  if(isset($_GET['dbpid']))
  {
    $bpid=$_GET['dbpid'];
    $result=$mysqli->query("select * from businessperson where BUSINESSPERSON_ID=$bpid")or die($mysqli->error);
    $row=$result->fetch_array();
    $fname=$row['FIRST_NAME'];
    $lname=$row['LAST_NAME'];
    $fno=$row['PHONE_NO'];
    $email=$row['EMAIL'];
    $username=$row['USER_NAME'];
    $fid=$row['FEEDBACK_ID'];
    $pid=$row['PAYMENT_ID'];
    $status=$row['STATUS'];
    echo "success";
  }
  else
  {
   echo "records will be displayed here";
  }

  ?>
  
            <div class="card-header">
            <h3 class="card-title">update Business Person</h3>

          </div>
          <!--card body-->
          <div class="card-body">
            <?php
                                      if(isset($_POST['bpid']))
                                      {
                                        $pid=$_POST['bpid'];
                                      }
                                        if(isset($_POST['fname']))
                                      {
                                        $mcode=$_POST['fname'];
                                      }
                                        if(isset($_POST['lname']))
                                      {
                                        $pdate=$_POST['lname'];
                                      }
                                        if(isset($_POST['fno']))
                                      {
                                        $ptime=$_POST['fno'];
                                      }
                                        if(isset($_POST['email']))
                                      {
                                        $bpid1=$_POST['email'];
                                      }
                                       if(isset($_POST['username']))
                                      {
                                        $mid=$_POST['username'];
                                      }
                                        if(isset($_POST['fid']))
                                      {
                                        $cid=$_POST['fid'];
                                      }
                                        if(isset($_POST['pid']))
                                      {
                                        $cid=$_POST['pid'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST" action="updatebp.php">
                                           <div class="form-group">
                                             <input type=hidden name="bpid" value="<?php echo $_GET['bpid'];?>"/>
                                           </div>
                                            <div class="form-group">
                                                <label for="fname">First_Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="firstname" name="fname" value="<?php echo $fname;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname">Last_Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="lastname" name="lname" value="<?php echo $lname;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="fno">Phone_Number</label>
                                                <input type="number" class="form-control" id="fno" placeholder="phonenumber" name="fno" value="<?php echo $fno;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $email;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="username">User_Name</label>
                                                <input type="text" class="form-control" id="username" placeholder="username" name="username" value="<?php echo $username;?>"required>
                                            <div class="form-group">
                                                <label for="fid">Feedback_ID</label>
                                                <input type="text" class="form-control" id="fid" placeholder="feedbackid" name="fid" value="<?php echo $fid;?>"required >
                                            </div>
                                                   <div class="form-group">
                                                <label for="pid">Payment_ID</label>
                                                <input type="text" class="form-control" id="pid" placeholder="paymentid" name="pid" value="<?php echo $pid;?>"required >
                                            </div>
                                             <input type="submit" class="btn btn-success" name="updatebp" value="update"/>
                                          
                                          </form>
         
                          </div>
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>