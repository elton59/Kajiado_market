  <?php

 $servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "marketapp";

$mysqli=new mysqli($servername,$username,$password,$db);
//delete payment
  if(isset($_GET['dpid']))
  {
  $payment_id=$_GET['dpid'];
  $result=$mysqli->query("delete from payment where PAYMENT_ID='$payment_id'")or die($mysqli->error);
 
  	echo'<script>alert("Record deleted succesfully!");
  	window.location.replace("deletepayment.php");
    </script>
  	';
  }	
  
  else
  {
  	echo "error deleting the record";
  }
  //delete bussuness pspell_config_personal(dictionary_link, file)
  $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['dbpid']))
  {
  $businessperson_id=$_GET['dbpid'];
  $result=$mysqli->query("delete from businessperson where BUSINESSPERSON_ID='$businessperson_id'")or die($mysqli->error);
 
  	echo'<script>alert("Record deleted succesfully!");
  	window.location.replace("deletebp.php");
    </script>
  	';
  }	
  
  else
  {
  	echo "error deleting the record";
  }
  //delete farm
  $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['drcid']))
  {
  $revenuecollector_id=$_GET['drcid'];
  $result=$mysqli->query("delete from revenuecollectors where REVENUECOLLECTOR_ID='$revenuecollector_id'")or die($mysqli->error);
 
    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("deleterevenue.php");
    </script>
    ';
  } 
  
  else
  {
    echo "error deleting the record";
  }
  //
  $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['drid']))
  {
  $user_id=$_GET['drid'];
  $result=$mysqli->query("delete from registration where USER_ID='$user_id'")or die($mysqli->error);
 
    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("deleteregistration.php");
    </script>
    ';
  } 
  
  else
  {
    echo "error deleting the record";
  }

 $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['wid']))
  {
  $warehouse_id=$_GET['wid'];
  $result=$mysqli->query("delete from warehouse where warehouse_id='$warehouse_id'")or die($mysqli->error);
 
    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("warehouse.php");
    </script>
    ';
  }
   $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['did']))
  {
  $driver_id=$_GET['did'];
  $result=$mysqli->query("delete from drivers where driver_id='$driver_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("driver.php");
    </script>
    ';
  } 
  $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['sid']))
  {
  $sale_id=$_GET['sid'];
  $result=$mysqli->query("delete from sales where sale_id='$sale_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("sales.php");
    </script>
    ';
  } 
    $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['eid']))
  {
  $employee_id=$_GET['eid'];
  $result=$mysqli->query("delete from aheroresearch where employee_id='$employee_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("aheroresearch.php");
    </script>
    ';
  } 
  $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['uid']))
  {
  $user_id=$_GET['uid'];
  $result=$mysqli->query("delete from users where user_id='$user_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("usersdelete.php");
    </script>
    ';
  }
   $mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['frid']))
  {
  $farmer_id=$_GET['frid'];
  $result=$mysqli->query("delete from farmers where farmer_id='$farmer_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
    window.location.replace("farmers.php");
    </script>
    ';
  }  
$mysqli=new mysqli($servername,$username,$password,$db);
  if(isset($_GET['mid']))
  {
  $mill_id=$_GET['mid'];
  $result=$mysqli->query("delete from mills where mill_id='$mill_id'")or die($mysqli->error);

    echo'<script>alert("Record deleted succesfully!");
   window.location.replace("mills.php");
    </script>
    ';
  }  
  ?>


