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

        <div class="panel-heading"><center>feedback</center></div>
           <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
  
  </ol>
</div>
        <div class="panel-body">
       <table id="example2" class="table table-responsive  table-hover">
                      <thead>
                        <tr><th>FEEDBACK_ID</th><th>REMARKS</th><th>BUSSINESSPERSON_ID</th><th>STATUS</th><TH>ACTION</TH></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from feedback")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                     <td>".$row['FD_ID']."</td>
                    <td>".$row['REMARKS']."</td>
                    <td>".$row['BUSINESSPERSONID']."</td>
                     <td>".$row['STATUS']."</td>
                   <td> <a href='feedback.php?apfid=$row[FD_ID]' class='btn btn-success'>Mark as read<a>
                   <a href='feedback.php? rjfid=$row[FD_ID]' class='btn btn-danger'>mark as not read<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>


   
  
      



    </div>
    <?php

    if(isset($_GET['apfid']))
  {
    $businessperson_id=$_GET['apfid'];
    $result = $mysqli->query("UPDATE feedback SET STATUS= 'read' WHERE FD_ID = $businessperson_id") or die($mysqli->error);
   
  
        echo '<script>alert("success!")</script>';
  
  }
     if(isset($_GET['rjfid']))
  {
    $businessperson_id=$_GET['rjfid'];
    $result = $mysqli->query("UPDATE feedback SET STATUS= 'notread' WHERE FD_ID = $businessperson_id") or die($mysqli->error);
   
  
       echo '<script>alert("success!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>