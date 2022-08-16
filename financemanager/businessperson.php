<?php
error_reporting(0);
if(!isset($_SESSION['uname']))
{
  header('location:index.php');
}
 
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
           <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="addbperson.php">new</a></li>
    <li class="breadcrumb-item"><a href="deletebp.php">delete</a></li>
  </ol>
</div>
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
                   <td> <a href='businessperson.php?apbpid=$row[BUSINESSPERSON_ID]' class='btn btn-success'>Approve<a>
                   <a href='businessperson.php?rjbpid=$row[BUSINESSPERSON_ID]' class='btn btn-danger'>Reject<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>
<td><a href='businesspersonreport.php' class='btn btn-danger'>Export to PDF</a></td>

   
  
      



    </div>
    <?php

    if(isset($_GET['apbpid']))
  {
    $businessperson_id=$_GET['apbpid'];
    $result = $mysqli->query("UPDATE businessperson SET STATUS= 'approved' WHERE BUSINESSPERSON_ID = $businessperson_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjbpid']))
  {
    $businessperson_id=$_GET['rjbpid'];
    $result = $mysqli->query("UPDATE businessperson SET STATUS= 'rejected' WHERE BUSINESSPERSON_ID = $businessperson_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>