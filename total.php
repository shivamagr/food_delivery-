<?php
//require'core.inc.php';
//require'connect.inc.php';

include'update.php';

echo $hell;
$q="SELECT * FROM `carts$mail` WHERE 1";
$r=mysqli_query($connection, $q);
$arr=mysqli_fetch_assoc($r);

$num_item=mysqli_num_rows($r);
while($arr){

		$q2="SELECT `cost` FROM `food_item` WHERE `food_id`='$arr["item_id"]'";
		$r2=mysqli_query($connection, $q2);
		$arr2=mysqli_fetch_assoc($r2);
		echo $total +=$arr2["cost"];
}
?>