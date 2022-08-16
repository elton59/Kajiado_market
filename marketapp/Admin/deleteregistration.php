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

        <div class="panel-body">
         <table id="example2" class="table table-bordered table-hover">
                      <thead>
                        <tr><th>USER_ID</th><th>USER_NAME</th><th>PASSWORD</th><th>REG_DATE</th><th>REG_TIME</th><th>BUSINESSPERSON_ID</th><th>GOODS_ID</th><th>STATUS</th><th>ACTION</th></tr>
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
                    <td> <a href='deleteregistration.php?drid=$row[USER_ID]' class='btn btn-info'>edit<a>
                   <a href='delete.php? drid=$row[USER_ID]' class='btn btn-danger'>delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
</table>

   
  
      



    </div>
    <?php

  if(isset($_GET['drid']))
  {
    $uid=$_GET['drid'];
    $result=$mysqli->query("select * from registration where USER_ID=$uid")or die($mysqli->error);
    $row=$result->fetch_array();
    $username1=$row['USER_NAME'];
    $password=$row['PASSWORD'];
    $regdate=$row['REG_DATE'];
    $regtime=$row['REG_TIME'];
    $bpid=$row['BUSINESSPERSON_ID'];
    $gid=$row['GOODS_ID'];
    $status=$row['STATUS'];
    echo "success";
  }
  else
  {
   echo "records will be displayed here";
  }

  ?>
  
            <div class="card-header">
            <h3 class="card-title">update Registration</h3>

          </div>
          <!--card body-->
          <div class="card-body">
            <?php
                                      if(isset($_POST['uid']))
                                      {
                                        $pid=$_POST['uid'];
                                      }
                                        if(isset($_POST['username1']))
                                      {
                                        $mcode=$_POST['username1'];
                                      }
                                        if(isset($_POST['password']))
                                      {
                                        $pdate=$_POST['password'];
                                      }
                                        if(isset($_POST['regdate']))
                                      {
                                        $ptime=$_POST['regdate'];
                                      }
                                        if(isset($_POST['regtime']))
                                      {
                                        $bpid1=$_POST['regtime'];
                                      }
                                       if(isset($_POST['bpid']))
                                      {
                                        $mid=$_POST['bpid'];
                                      }
                                        if(isset($_POST['gid']))
                                      {
                                        $cid=$_POST['gid'];
                                      }

                                      ?>
                                        <form class="forms-sample" method="POST" action="updateregistration.php">
                                           <div class="form-group">
                                             <input type=hidden name="uid" value="<?php echo $_GET['uid'];?>"/>
                                           </div>
                                            <div class="form-group">
                                                <label for="username1">User_Name</label>
                                                <input type="text" class="form-control" id="username1" placeholder="username" name="username1" value="<?php echo $username1;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="text" class="form-control" id="password" placeholder="password" name="password" value="<?php echo $password;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="regdate">Reg_Date</label>
                                                <input type="date" class="form-control" id="regdate" placeholder="regdate" name="regdate" value="<?php echo $regdate;?>"required>
                                            </div>
                                            <div class="form-group">
                                                <label for="regtime">Reg_Time</label>
                                                <input type="time" class="form-control" id="regtime" placeholder="regtime" name="regtime" value="<?php echo $regtime;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bpid">Businessperson_ID</label>
                                                <input type="text" class="form-control" id="bpid" placeholder="businesspersonid" name="bpid" value="<?php echo $bpid;?>"required>
                                            <div class="form-group">
                                                <label for="gid">Goods_ID</label>
                                                <input type="text" class="form-control" id="gid" placeholder="goodsid" name="gid" value="<?php echo $gid;?>"required >
                                            </div>
                                             <input type="submit" class="btn btn-success" name="updateregistration" value="update"/>
                                          
                                          </form>
         
                          </div>
  ?>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

</body>
</html>