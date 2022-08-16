<?php
error_reporting(0);
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";
$mysqli = new  mysqli($servername, $username, $password,$db) or die(mysql_error($mysqli));
if(isset($_POST['updatebp']))
{   
 $bpid=$_POST['bpid'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $fno=$_POST['fno'];
 $email=$_POST['email'];
 $username=$_POST['username'];
 $fid=$_POST['fid'];
 $pid=$_POST['pid'];
	$result=$mysqli->query("update businessperson SET FIRST_NAME = '$fname', LAST_NAME ='$lname',PHONE_NO='$fno',EMAIL = '$email',USER_NAME='$username',FEEDBACK_ID ='$Fid',PAYMENT_ID='$pid' where BUSINESSPERSON_ID = '$bpid'") or die($mysqli->error);


		echo '<script>alert("Record Updated Successfully!");
			window.location.replace("businessperson.php");
	</script>';
}	

	?>