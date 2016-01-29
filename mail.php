<?php



include_once'update.php';
$q5="SELECT `full_name` FROM 'signup' WHERE `email_id`='$mail'";
$res5=mysqli_query($connection, $q5);
$arr5=mysqli_fetch_assoc($res5);
$message='Thank you!'.$arr5["full_name"].'! We hope to see you soon!';
$message=wordwrap($message, 50);
mail($mail, "Your Order", $message); 
header("Location:index.php");

?>