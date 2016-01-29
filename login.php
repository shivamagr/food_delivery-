<?php
require 'core.inc.php';
require 'connect.inc.php';


if(isset($_POST['email_id'])&&isset($_POST['password']))
{
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
	$password_hash=md5($password);
	if(!empty($email_id)&&!empty($password))
	{
		$query1="SELECT `email_id`,`password` FROM `signup` WHERE `email_id`='$email_id' AND `password`='$password_hash' ";
		if($query_run=mysqli_query($connection,$query1))
		{
			$queryi_num_rows=mysqli_num_rows($query_run);
			if($queryi_num_rows==0)
			{
				echo "wrong email_id or password";
			}
			else if($queryi_num_rows==1)
			{
				echo "ok";
				$quer="SELECT `id` FROM `signup` WHERE `email_id`='$email_id'";
				$result11=mysqli_query($connection, $quer);
                                 $query2="CREATE TABLE `carts$email_id`(cart_id int NOT NULL AUTO_INCREMENT, user_id int not null,item_id int not null , date date, quantity int,
                                                primary key(cart_id),
												FOREIGN KEY (user_id) REFERENCES signup(id),
                                                foreign key(item_id) REFERENCES food_item(food_id)
                                 )";
                                 $result2=mysqli_query($connection, $query2);

                                
				$us=mysqli_fetch_assoc($result11);
				$user_id=$us["id"];
				$_SESSION['user_id']=$user_id;

				echo $_SESSION['user_id'];
				header('Refresh: 2; URL=index.php');
			}
		}

	}
	else
	{
		//direct to current page;
		echo "please enter all the fields";
	}

}
	ob_end_flush();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Curabitur a Food and restaurant Category Flat Bootstarp Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Curabitur Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <script src="js/jquery-1.11.1.min.js"></script>
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
<link href="css/set.css" rel="stylesheet" type="text/css" media="all"/>
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
							<a href="checkout.html">
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
							<li><a  href="index.html">home</a></li>
							<li><a  href="about.html">about</a></li>
							<li><a  href="menu.html">menus</a></li>
							<li><a  href="gallery.html">gallery</a></li>
							<li><a  href="events.html">events</a></li>
							<li><a  href="contact.html">contact</a></li>
						</ul>
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

			<!--contact-->
			<div class="content">
 <div class="main-1">
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="account.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form action="" method="POST">
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="email_id">
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input id="password" type="password" name="password">
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" name="submit" value="LOG IN">
			    </form>
			   </div>
			   <div class="clearfix"> </div
			 </div>
		   </div>
		   </div>
	</div>
	</div>
	<!------>

<!-- login -->
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
