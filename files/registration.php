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

        <div class="panel-heading"><center>Registration</center></div>
           <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="addregistration.php">new</a></li>
    <li class="breadcrumb-item"><a href="deleteregistration.php">delete</a></li>
  </ol>
</div>
        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>USER_ID</th><th>USER_NAME</th><th>PASSWORD</th><th>REG_DATE</th><th>REG_TIME</th><th>BUSSINESSPERSON_ID</th><th>GOODS_ID</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from registration")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                     <td>".$row['USER_ID']."</td>
                    <td>".$row['USER_NAME']."</td>
                    <td>".$row['PASSWORD']."</td>
                    <td>".$row['REG_DATE']."</td>
                    <td>".$row['REG_TIME']."</td>
                    <td>".$row['BUSINESSPERSON_ID']."</td>
                    <td>".$row['GOODS_ID']."</td>
                    <td>".$row['STATUS']."</td>
                   <td> <a href='registration.php?aprid=$row[USER_ID]' class='btn btn-success'>Approve<a>
                   <a href='registration.php? rjrid=$row[USER_ID]' class='btn btn-danger'>Reject<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>
<td><a href='registrationreport.php' class='btn btn-danger'>Export to PDF</a></td>

   
  
      



    </div>
    <?php

    if(isset($_GET['aprid']))
  {
    $user_id=$_GET['aprid'];
    $result = $mysqli->query("UPDATE registration SET STATUS= 'approved' WHERE USER_ID = $user_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjrid']))
  {
    $user_id=$_GET['rjrid'];
    $result = $mysqli->query("UPDATE registration SET STATUS= 'rejected' WHERE USER_ID = $user_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>