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

        <div class="panel-heading"><center>Delete finance</center></div>

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
                    <td> <a href='deletefinance.php?dfid=$row[USER_ID]' class='btn btn-info'>edit<a>
                   <a href='delete.php? dfid=$row[USER_ID]' class='btn btn-danger'>delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>

   
  
      



    </div>
    <?php

  if(isset($_GET['dfid']))
  {
    $dfid=$_GET['dfid'];
    $result=$mysqli->query("select * from finance where USER_ID=$dfid")or die($mysqli->error);
    $row=$result->fetch_array();
   
    $uname=$row['USERNAME'];
  
    $email=$row['EMAIL'];
    $password=$row['PASSWORD'];
    $status=$row['STATUS'];
    echo "success";
  }
  else
  {
   echo "records will be displayed here";
  }

  ?>
  
            <div class="card-header">
            <h3 class="card-title">FINANCE</h3>

          </div>
          <!--card body-->
          <div class="card-body">
            <?php
                                      if(isset($_POST['dfid']))
                                      {
                                        $dfd=$_POST['dfid'];
                                      }
                                       
                                        if(isset($_POST['uname']))
                                      {
                                        $uname=$_POST['uname'];
                                      }
                                        if(isset($_POST['email']))
                                      {
                                        $email=$_POST['email'];
                                      }
                                        if(isset($_POST['password']))
                                      {
                                        $password=$_POST['password'];
                                      }
                                       

                                      ?>
                                        <form class="forms-sample" method="POST" action="updatefinance.php">
                                           <div class="form-group">
                                             <input type=hidden name="dfid" value="<?php echo $_GET['dfid'];?>"/>
                                           </div>
                                          
                                            <div class="form-group">
                                                <label for="lname1">USERNAME</label>
                                                <input type="text" class="form-control" id="lname1" placeholder="username" name="uname" value="<?php echo $uname;?>"required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="email1">Email</label>
                                                <input type="email" class="form-control" id="email1" placeholder="email" name="email" value="<?php echo $email;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cid1">password</label>
                                                <input type="text" class="form-control" id="cid1" placeholder="password" name="password" value="<?php echo $password;?>"required>
                                             <input type="submit" class="btn btn-success" name="updatefin" value="update"/>
                                          
                                          </form>
         
                          </div>
  
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>