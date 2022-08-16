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

        <div class="panel-heading"><center>Markets</center></div>
           <div class="col-sm-6">

</div>
        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>MARKET_ID</th><th>MARKET_NAME</th><th>LOCATION</th></th></tr>
                      </thead>

                      <?php
                  $result=$mysqli->query("select * from market")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                     <td>".$row['MARKET_ID']."</td>
                    <td>".$row['MARKET_NAME']."</td>
                    <td>".$row['MARKET_LOCATION']."</td>
                   
                   </tbody>
                    "
                  ;}
            ?>
</table>
<td><a href='mreport.php' class='btn btn-danger'>Export to PDF</a></td>

   
  
      



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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="files/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="files/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="files/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="files/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="files/plugins/screenfull/dist/screenfull.js"></script>
        <script src="files/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="files/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="files/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="files/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="files/plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="files/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
        <script src="files/plugins/moment/moment.js"></script>
        <script src="files/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="files/plugins/d3/dist/d3.min.js"></script>
        <script src="files/plugins/c3/c3.min.js"></script>
        <script src="files/js/tables.js"></script>
        <script src="files/js/widgets.js"></script>
        <script src="files/js/charts.js"></script>
        <script src="files/dist/js/theme.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
</body>
</html>