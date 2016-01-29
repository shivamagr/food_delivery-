<?php
//require 'core.inc.php';
include_once'update.php';
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

	echo "welcome user!";
	$current_ur = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo'
<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Curabitur a Food and restaurant Category Flat Bootstarp Responsive Website Template | Check out :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curabitur Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <script src="js/jquery-1.11.1.min.js"></script>
 
 <link rel="stylesheet" href="css/stall.css" type="text/css" media="screen" />
  <script src="js/bootstrap.js"> </script>
  <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$(\'html,body\').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->

</head>
<body>
		<!-- start-header section-->
			<div class="header">
				<div class="container">
				     <div class="top-header">
						<div class="phone">
							<ul>
								<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
								<li><p>+4758 655 5947</p></li>
							</ul>
						</div>
						<div class="logo">
							<h1><a href="index.html">curabitur</a></h1>
						</div>
						<div class="header-right">

						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
							</a>
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!-- end-header section-->
		<!--start-banner-->
			<div class="banner ban1">
				<div class="container">
					<div class="top-menu">
					<span class="menu"><img src="images/nav.png" alt=""/> </span>
						<ul>
							<li><a  href="index.php">home</a></li>
							<li><a  href="about.php">about</a></li>
							<li><a  href="menu.php">menus</a></li>
							<li><a  href="gallery.php">gallery</a></li>
							<li><a  href="events.php">events</a></li>
							<li><a  href="contact.php">contact</a></li>
						</ul
						<!-- script for menu -->

							 <script>
							 $("span.menu").click(function(){
							 $(".top-menu ul").slideToggle("slow" , function(){
							 });
							 });
							 </script>
						<!-- //script for menu -->
					</div>
					</div>
			</div>
		<!--end-banner-->

<!-- checkout -->
<div class="cart-items">
	<div class="container">
			 <h1>My Shopping Bag (3)</h1>';?>
			 <?php
				//include_once'update.php';
				//echo "hiiiiiiiiiiiiiiiiiiiiiii\n";
				//echo $total;
				//echo $q3;
				$res4=mysqli_query($connection, $q3);				
				while($arr=mysqli_fetch_assoc($res4)){
					$itemid=$arr["item_id"];
					$qnt=$arr["quantity"];
					$q2="SELECT * FROM `food_item` WHERE `food_id`='$itemid'";
					$r2=mysqli_query($connection, $q2);
					$arr2=mysqli_fetch_assoc($r2);
					$item_total=$qnt*$arr2["cost"];
					echo'<form method="POST" action="update.php">
					<div class="cart-header">
				 
					<input type="hidden" name="check" value="remove">
					<input type="hidden" name="carts_id" value='.$arr["cart_id"].'>
					<input type="hidden" name="return_mine" value="'.$current_ur.'" />
					
					<button type="submit" ><div class="close1"></div></button>	
				 
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/'.$arr2["photo"].'" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> '.$arr2["food_name"].' </a><span>  </span></h3>
						<ul class="qty">
							<li><p>Quantity:'.$qnt.'</p></li>
							<li><p>FREE delivery</p></li>
						</ul>
							 <div class="delivery">
							 <p>Rate: ₹'.$arr2["cost"].'</p>
							 <span>₹'.$item_total.'</span>
							 <div class="clearfix"></div>
				        </div>
					   </div>
					<div class="clearfix"></div>
							
				  </div>
			 </div></form>';
				}
				echo'
				<form method="POST" action="ordered.php">
				<input type="hidden" name="final" value="orderisdone">
				<button type="submit" class="add_to_cart"></button>
				</form>';
			 ?>
				<?php
				echo'
				</div>
				</div>
<!-- checkout -->
<div class="specials-section">
				<div class="container">
					<div class="col-md-3 specials">
					<h3>about</h3>
					<p>Morbi pretium gravida justo nec ultrices. Ut et facilisis justo. Fusce ac turpis eros, vel molestie lectus.feugiat velit velit non turpis</p>
				</div>
				<div class="col-md-3 specials1">
				<h3>specials</h3>
				<ul>
					<li><a href="#">New Listing Sign-Up</a></li>
					<li><a href="#">Consectetur adipiscing</a></li>
					<li><a href="#">Integer molestie lorem</a></li>
					<li><a href="#">Facilisis in pretium nisl</a></li>
				</ul>
				</div>
			<div class="col-md-3 specials1">
			<h3>recipes</h3>
			<ul>
				<li><a href="#">Integer molestie lorem</a></li>
				<li><a href="#">Integer molestie lorem</a></li>
				<li><a href="#">Consectetur adipiscing</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
			</ul>
			</div>
			<div class="col-md-3 specials1">
			<h3>social</h3>
			<ul>
				<li><a href="#">facebook</a></li>
				<li><a href="#">twitter</a></li>
				<li><a href="#">google</a></li>
				<li><a href="#">viemo</a></li>
			</ul>
			</div>
			<div class="clearfix"></div>
			</div>
			</div>
	</div>
	<div class="footer-section">
					<div class="container">
						<div class="footer-top">
						<p>&copy; 2015 <span>Curabitur.</span> All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: \'toTop\', // fading element id
								containerHoverID: \'toTopHover\', // fading element hover id
								scrollSpeed: 1200,
								easingType: \'linear\'
					 		};
							*/
							
							$().UItoTop({ easingType: \'easeOutQuart\' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


					</div>
					</div>


	
</body>
</html>';
}
else
{
	header('Location: login.php');
}
?>
