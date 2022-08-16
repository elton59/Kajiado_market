<?php
error_reporting(0);
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";
$mysqli = new  mysqli($servername, $username, $password,$db) or die(mysql_error($mysqli));
if(isset($_POST['updaterevenue']))
{   
 $rcid=$_POST['rcid'];
 $fname1=$_POST['fname1'];
 $lname1=$_POST['lname1'];
 $pno1=$_POST['pno1'];
 $email1=$_POST['email1'];
 $cid1=$_POST['cid1'];
	$result=$mysqli->query("update revenuecollectors SET FIRST_NAME = '$fname1', LAST_NAME='$lname1',PHONE_NO='$pno1',EMAIL = '$email1',CONFIRMATION_ID='$cid1' where REVENUECOLLECTOR_ID = '$rcid'") or die($mysqli->error);


		echo '<script>alert("Record Updated Successfully!");
			window.location.replace("revenuecollectors.php");
	</script>';
}	

	?>