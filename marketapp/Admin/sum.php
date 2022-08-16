<?php
$result3=$mysqli->query("SELECT SUM(AMOUNT) AS total from payment")or die($mysqli->error);
while($row=mysqli_fetch_assoc($result))
{
   echo $total=$row['total'];
}
?>