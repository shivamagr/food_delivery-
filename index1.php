<?php
require 'core.inc.php';
require 'connect.inc.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	echo "you r logged in";
}
else{
	include 'login.php';
}

?>