<?php
require 'core.inc.php';
require 'connect.inc.php';

	$user_id=$_SESSION['user_id'];
	$qu="SELECT `email_id` FROM `signup` WHERE `id`='$user_id'";
	$res1=mysqli_query($connection, $qu);
	$u=mysqli_fetch_assoc($res1);
	$mail=$u['email_id'];

	$time=time();
	echo $date_now=date('Y-m-d',$time);
	$time_now=date('H:i:s',$time);
	$timestamp=$date_now." ".$time_now;
	
	$retu='';
	
if(isset($_POST["type"]) && $_POST["type"]="add" && $_POST["product_qty"]>0)
{
	echo $id=$_POST["id_id"];
	$time=time();
	echo $date_now=date('Y-m-d',$time);
	$time_now=date('H:i:s',$time);
	$timestamp=$date_now." ".$time_now;
	
	$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):'';
	$retu=$return_url;
	
	echo $qty=$_POST["product_qty"];
	$que="INSERT INTO `carts$mail` (`cart_id`, `user_id`, `item_id`, `date`, `quantity`) VALUES (NULL, '".mysqli_real_escape_string($connection,$user_id)."', '".mysqli_real_escape_string($connection,$id)."',
												'".mysqli_real_escape_string($connection, $date_now)."','".mysqli_real_escape_string($connection, $qty)."'	)";
	$resu=mysqli_query($connection, $que);
//echo $resu;	
	//echo $_SESSION['user_id'];
}

if(isset($_POST["check"]) && $_POST["check"]="remove")
{
	//////////////
	$return_url = (isset($_POST["return_mine"]))?urldecode($_POST["return_mine"]):'';
	$retu=$return_url;
	/////////////////////
	$cartid=$_POST["carts_id"];
	$q4="DELETE FROM `carts$mail` WHERE `cart_id`='$cartid'";
	$res4=mysqli_query($connection, $q4);
}

$q3="SELECT * FROM `carts$mail` WHERE 1";
	$res3=mysqli_query($connection, $q3);
	

if(mysqli_num_rows($res3)>0)
	{
		//adding total//
		$num_item=mysqli_num_rows($res3);
		$total=0;
		while($arr=mysqli_fetch_assoc($res3)){
				$itemid=$arr["item_id"];
				$qnt=$arr["quantity"];
				$q2="SELECT `cost` FROM `food_item` WHERE `food_id`='$itemid'";
				$r2=mysqli_query($connection, $q2);
				$arr2=mysqli_fetch_assoc($r2);
				$total +=$arr2["cost"]*$qnt;
}
echo "your cart\n";
echo $num_item;
echo $total;
	}
	else
	{
		$num_item=0;
		echo $total=0;
	}
//$return_url = (isset($_POST["return_url"]))?urldecode($_POST["return_url"]):''; //return url
header('Location:'.$retu);


?>