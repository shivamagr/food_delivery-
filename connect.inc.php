<?php

$host="localhost";
$user="root";
$p="";
$my_db="user_db";

$connection=mysqli_connect($host, $user,$p,$my_db);
if(!$connection)
{
	die("Connection failed: ".mysqli_connect_error());
}
else 
	echo "connected";

?>