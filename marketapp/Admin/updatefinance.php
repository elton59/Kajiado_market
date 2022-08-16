<?php
error_reporting(0);
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";
$mysqli = new  mysqli($servername, $username, $password,$db) or die(mysql_error($mysqli));
if(isset($_POST['updatefin']))
{   
 $dfid=$_POST['dfid'];

 $uname=$_POST['uname'];

 $email=$_POST['email'];
 $password=$_POST['password'];
	$result=$mysqli->query("update finance  USERNAME='$uname',EMAIL = '$email',PASSWORD='$password' where USER_ID = '$dfid'") or die($mysqli->error);


		echo '<script>alert("Record Updated Successfully!");
			window.location.replace("finance.php");
	</script>';
}	

	?>