
<?php
//host name
$host = "localhost";
//user name
$username ="hopecore_John";
//database password
$password = "#Karibu2030";
//database name
$database ="hopecore_marketapp";

$mysqli = new mysqli($host,$username,$password,$database) or die($mysqli->error);

   if(isset($_POST['login']))
{
    $uname=$_POST['uname'];	
    $upass=$_POST['upass'];
   

$result = $mysqli->query("SELECT * FROM businessperson where username='$uname' AND  password='$upass' AND status='approved'") or die($mysqli->error);

$row=$result->fetch_assoc();
$bpid=$row['BUSINESSPERSON_ID'];
$status=$row['STATUS'];
$_SESSION['uname']=$row['USERNAME'];
$_SESSION['bpid']=$row['BUSINESSPERSON_ID'];
if (mysqli_num_rows($result) == 1 ){
echo 
'<script>alert("'.$_SESSION['uname'].'");
               window.location.replace("main.php");
        </script>';
exit();
}
else
{
// echo '<script>alert("Login failed");
//                 window.location.replace("index.php")
//         </script>';
exit();
}
}
?>