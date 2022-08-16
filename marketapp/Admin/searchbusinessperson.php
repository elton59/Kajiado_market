<?php
include('conn.php');
$search=$_POST['search'];
$q=mysqli_query($conn,"select * from businessperson where BUSINESSPERSON_ID='$search'  or FIRSTNAME='$search' or LASTNAME='$search' or EMAIL='$search' or USERNAME='$search'or PHONE_NO='$search'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:green'>Record Not Found !!!</h2>";
}
else
{
?>
<script>
<!DOCTYPE HTML>
<html>
<head>
<title>Machakospp | Admin manage Payments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
		<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>
<body>
   <div class="page-container">

            <!--header start here-->



</script>
<h2 style="color:green; " align="center" >Search Results</h2>

<table class="table table-bordered">


	<tr>
		<td colspan="16"><a href="displaycustomers.php">Back</a></td>
	</tr>
	<Tr class="active">
    <th>#</th>
    <tr><th>BUSINESSPERSON_ID</th><th>FIRST_NAME</th><th>LAST_NAME</th><th>PHONE_NO</th><th>EMAIL</th><th>USERNAME</th><th>PASSWORD</th></tr>
		<!--<th>Update</th>-->
	</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";


echo "<td>".$row['BUSINESSPERSON_ID']."</td>";
echo "<td>".$row['FIRSTNAME']."</td>";
echo "<td>".$row['LASTNAME']."</td>";
echo "<td>".$row['PHONE_NO']."</td>";
echo "<td>".$row['EMAIL']."</td>";


echo "<td>".$row['USERNAME']."</td>";
?>


</tr>
<!--<Td><a href="index.php?page=update_group" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>-->

<?php
echo "</Tr>";
$i++;
}
		?>

</table>
<?php }?>
