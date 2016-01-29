<?php

include_once'update.php';
if(isset($_POST["final"]) && $_POST["final"]="orderisdone")
{
	$res7=mysqli_query($connection,$q3);
while($arr=mysqli_fetch_assoc($res7)){
				$itemid=$arr["item_id"];
				$qnt=$arr["quantity"];
				$state=0;
				$q6="INSERT INTO `order` (`order_id`,`user_id`,`item_id`,`quantity`,`date`,`status`,`cost`) VALUES(NULL, '".mysqli_real_escape_string($connection,$user_id)."',
					'".mysqli_real_escape_string($connection,$itemid)."', '".mysqli_real_escape_string($connection,$qnt)."', '".mysqli_real_escape_string($connection,$timestamp)."',
					'".mysqli_real_escape_string($connection,$state)."','".mysqli_real_escape_string($connection,$total)."')";
				$res6=mysqli_query($connection, $q6);
}	
}
header("Location:mail.php");
?>