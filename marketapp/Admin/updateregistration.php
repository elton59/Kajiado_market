<?php
error_reporting(0);
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";
$mysqli = new  mysqli($servername, $username, $password,$db) or die(mysql_error($mysqli));
if(isset($_POST['updateregistration']))
{   
 $uid=$_POST['uid'];
 $username1=$_POST['username1'];
 $password=$_POST['password'];
 $regdate=$_POST['regdate'];
 $regtime=$_POST['regtime'];
 $bpid=$_POST['bpid'];
 $gid=$_POST['gid'];
	$result=$mysqli->query("update registration SET USER_NAME = '$username1', PASSWORD='$password',REG_DATE='$regdate',REG_TIME = '$regtime',BUSINESSPERSON_ID='$bpid',GOODS_ID ='$gid' where USER_ID = '$uid'") or die($mysqli->error);


		echo '<script>alert("Record Updated Successfully!");
			window.location.replace("registration.php");
	</script>';
}	

	?>