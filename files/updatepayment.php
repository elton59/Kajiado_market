<?php
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";
$mysqli = new  mysqli($servername, $username, $password,$db) or die(mysql_error($mysqli));
if(isset($_POST['updatepayment']))
{   
 $pid=$_POST['pid'];
 $mcode=$_POST['mcode'];
 $pdate=$_POST['pdate'];
 $ptime=$_POST['ptime'];
 $bpid1=$_POST['bpid1'];
 $mid=$_POST['mid'];
 $cid=$_POST['cid'];
	$result=$mysqli->query("update payment SET MPESA_CODE = '$mcode', PAYMENT_DATE ='$pdate',PAYMENT_TIME='$ptime',BUSINESSPERSON_ID = '$bpid1',MARKET_ID='$mid',CONFIRMATION_ID ='$cid' where PAYMENT_ID = '$pid'") or die($mysqli->error);


		echo '<script>alert("Record Updated Successfully!");
			window.location.replace("payment.php");
	</script>';
}	

	?>