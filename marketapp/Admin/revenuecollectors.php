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

        <div class="panel-heading"><center>Revenue Collectors</center></div>
           <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="addrevenue.php">new</a></li>
    <li class="breadcrumb-item"><a href="deleterevenue.php">delete</a></li>
  </ol>
</div>
        <div class="panel-body">
         <table id="example2" class="table table-responsive  table-hover">
                      <thead>
                        <tr><th>REVENUECOLLECTOR_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>USERNAME</th><th>PHONE_NO</th><th>EMAIL</th><th>PASSWORD</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from revenuecollectors")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                     <td>".$row['REVENUECOLLECTOR_ID']."</td>
                    <td>".$row['FIRSTNAME']."</td>
                    <td>".$row['LASTNAME']."</td>
                    <td>".$row['USERNAME']."</td>
                    <td>".$row['PHONE_NO']."</td>
                    <td>".$row['EMAIL']."</td>
                    <td>".$row['PASSWORD']."</td>
                    <td>".$row['STATUS']."</td>
                   <td> <a href='revenuecollectors.php?aprcid=$row[REVENUECOLLECTOR_ID]' class='btn btn-success'>Approve<a>
                   <a href='revenuecollectors.php? rjrcid=$row[REVENUECOLLECTOR_ID]' class='btn btn-danger'>Reject<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>


   
  
      



    </div>
    <?php

    if(isset($_GET['aprcid']))
  {
    $revenuecollector_id=$_GET['aprcid'];
    $result = $mysqli->query("UPDATE revenuecollectors SET STATUS= 'approved' WHERE REVENUECOLLECTOR_ID = $revenuecollector_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjrcid']))
  {
    $revenuecollector_id=$_GET['rjrcid'];
    $result = $mysqli->query("UPDATE revenuecollectors SET STATUS= 'rejected' WHERE REVENUECOLlECTOR_ID = $revenuecollector_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>