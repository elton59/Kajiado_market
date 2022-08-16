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
    <div class="col-sm-2">
    	
    </div>
    <div class="col-sm-10">

    <div class="panel panel-success">

        <div class="panel-heading"><center>finance manager</center></div>
        <div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="addfinance.php">new</a></li>
    <li class="breadcrumb-item"><a href="deletefinance.php">delete</a></li>
  </ol>
</div>
 <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>USER_ID</th><th>USERNAME</th><th>EMAIL</th><th>PASSWORD</th><th>STATUS</th><th>ACTION</th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from finance")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                     <td>".$row['USER_ID']."</td>
                    <td>".$row['USERNAME']."</td>
                  
                    <td>".$row['EMAIL']."</td>
                    
                    <td>".$row['PASSWORD']."</td>
                    <td>".$row['STATUS']."</td>
                  <td> <a href='finance.php?apbpid=$row[USER_ID]' class='btn btn-success'>Approve<a>
                   <a href='finance.php? rjbpid=$row[USER_ID]' class='btn btn-danger'>Reject<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>


   
  
      



    </div>
    <?php

    if(isset($_GET['apbpid']))
  {
    $user_id=$_GET['apbpid'];
    $result = $mysqli->query("UPDATE finance SET STATUS= 'approved' WHERE USER_ID = $user_id") or die($mysqli->error);
   
  
        echo '<script>alert("Record Approved!")</script>';
  
  }
     if(isset($_GET['rjbpid']))
  {
    $user_id=$_GET['rjbpid'];
    $result = $mysqli->query("UPDATE finance SET STATUS= 'rejected' WHERE USER_ID = $user_id") or die($mysqli->error);
   
  
       echo '<script>alert("Record Rejected!")</script>';
   
  }
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>