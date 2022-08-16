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

        <div class="panel-heading"><center>Revenue Collector</center></div>

        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>REVENUECOLLECTOR_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>PHONE_NO</th><th>EMAIL</th><th>CONFIRMATION_ID</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from revenuecollectors")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['REVENUECOLLECTOR_ID']."</td>
                    <td>".$row['FIRST_NAME']."</td>
                    <td>".$row['LAST_NAME']."</td>
                    <td>".$row['PHONE_NO']."</td>
                    <td>".$row['EMAIL']."</td>
                    <td>".$row['CONFIRMATION_ID']."</td>
                    <td>".$row['STATUS']."</td>
                    <td> <a href='deleterevenue.php?drcid=$row[REVENUECOLLECTOR_ID]' class='btn btn-info'>edit<a>
                   <a href='delete.php? drcid=$row[REVENUECOLLECTOR_ID]' class='btn btn-danger'>delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>

   
  
      



    </div>
    <?php

  if(isset($_GET['drcid']))
  {
    $rcid=$_GET['drcid'];
    $result=$mysqli->query("select * from revenuecollectors where REVENUECOLLECTOR_ID=$rcid")or die($mysqli->error);
    $row=$result->fetch_array();
    $fname1=$row['FIRST_NAME'];
    $lname1=$row['LAST_NAME'];
    $pno1=$row['PHONE_NO'];
    $email1=$row['EMAIL'];
    $cid1=$row['CONFIRMATION_ID'];
    $status=$row['STATUS'];
    echo "success";
  }
  else
  {
   echo "records will be displayed here";
  }

  ?>
  
            <div class="card-header">
            <h3 class="card-title">update Revenue Collector</h3>

          </div>
          <!--card body-->
          <div class="card-body">
            <?php
                                      if(isset($_POST['rcid']))
                                      {
                                        $pid=$_POST['rcid'];
                                      }
                                        if(isset($_POST['fname1']))
                                      {
                                        $mcode=$_POST['fname1'];
                                      }
                                        if(isset($_POST['lname1']))
                                      {
                                        $pdate=$_POST['lname1'];
                                      }
                                        if(isset($_POST['pno1']))
                                      {
                                        $ptime=$_POST['pno1'];
                                      }
                                        if(isset($_POST['email1']))
                                      {
                                        $bpid1=$_POST['email1'];
                                      }
                                       if(isset($_POST['cid1']))
                                      {
                                        $mid=$_POST['cid1'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST" action="updaterevenue.php">
                                           <div class="form-group">
                                             <input type=hidden name="rcid" value="<?php echo $_GET['rcid'];?>"/>
                                           </div>
                                            <div class="form-group">
                                                <label for="fname1">First_Name</label>
                                                <input type="text" class="form-control" id="fname1" placeholder="firstname" name="fname1" value="<?php echo $fname1;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="lname1">Last_Name</label>
                                                <input type="text" class="form-control" id="lname1" placeholder="lastname" name="lname1" value="<?php echo $lname1;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pno1">Phone_No</label>
                                                <input type="number" class="form-control" id="pno1" placeholder="Phone_No" name="pno1" value="<?php echo $pno1;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email1">Email</label>
                                                <input type="email" class="form-control" id="email1" placeholder="email" name="email1" value="<?php echo $email1;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cid1">Confirmation_ID</label>
                                                <input type="text" class="form-control" id="cid1" placeholder="confirmationid" name="cid1" value="<?php echo $cid1;?>"required>
                                             <input type="submit" class="btn btn-success" name="updaterevenue" value="update"/>
                                          
                                          </form>
         
                          </div>
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>