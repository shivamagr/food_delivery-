<?php
require 'core.inc.php';
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
	
	echo "welcome user! <a href=' logoutus.php'>Log Out</a>";
	echo'
	<!--------------------------------------------->
<!DOCTYPE HTML>
<html>
<head>
<title>Curabitur a Food and restaurant Category Flat Bootstarp Responsive Website Template | Events :: w3layouts</title>
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
							<li><a  href="index.php">home</a></li>
							<li><a  href="about.php">about</a></li>
							<li><a  href="menu.php">menus</a></li>
							<li><a  href="gallery.php">gallery</a></li>
							<li><a  href="events.php" class="active">events</a></li>
							<li><a  href="contact.php">contact</a></li>
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
                        <div ="user">
<div>

	<ul class="a">
             <li>
     <a href="#"><div class="pic"><img src="1.jpg"></div></a>
            <ul>
            	<li>
               <ul class="dropdown">
                <li><a href="#">Profile</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Logout</a></li>
                </ul>
              </li>
        </ul>

          </li>
      </ul>
 </div>




<style type="text/css">
ul.a{   margin: 0;
        padding: 0;
        list-style: none;
        background-color:;

    }
    ul li.a{
        display: inline-block;
        position: absolute;
        line-height: 21px;

    }
    ul li a.a{

        padding: 8px 25px;
        color: #333;
        text-decoration: none;
    }
       ul li ul.dropdown{
       	font-family: sans-serif;
       	text-align: center;
       	max-width: 65px;
        min-width: 65px; /* Set width of the dropdown */
        background: #f2f2f2;
        display: none;
        position: absolute;
        z-index: 999;
        left: 0;
    }
    ul li:hover ul.dropdown{

    	display: block;	/* Display the dropdown */
    }
    ul li ul.dropdown li{
        display: block;
    }
</style>
</div>

			</div>

		<!--end-banner-->

			<div class="content">
						<div class="events-section">
						<div class="container">
							<h3>events</h3>
						<div class="events-grids">
						<div class="events1">
						<div class="col-md-4 event-grid">
						<a href="#" class="mask">
				     <img src="images/e1.jpg" class="img-responsive zoom-img" alt=""></a>
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="col-md-4 event-grid">
							<a href="#" class="mask">
				     <img src="images/e2.jpg" class="img-responsive zoom-img" alt="">
					</a>						
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="col-md-4 event-grid">
						<a href="#" class="mask">
						<img src="images/e3.jpg" class="img-responsive zoom-img" alt=""></a>						
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="clearfix"></div>
						</div>
						<div class="events2">
						<div class="col-md-4 event-grid">
						<a href="#" class="mask">
						<img src="images/e4.jpg" class="img-responsive zoom-img" alt=""></a>						
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="col-md-4 event-grid">
						<a href="#" class="mask">
						<img src="images/e5.jpg" class="img-responsive zoom-img" alt=""></a>						
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="col-md-4 event-grid">
						<a href="#" class="mask">
						<img src="images/e6.jpg" class="img-responsive zoom-img" alt=""></a>						
						<h5>october 17, 2014</h5>
						 <h4>sodales orci et</h4>
					<p>Were dolor in hendrerit in vulputate velit esse molestie con sequat,Nulla consectetur maximus sem vel aliquet. Donec blandit condimentum varius</p>
						<a href="#" class="button"> more info</a>
						</div>
						<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
						</div>
						</div>
						</div>

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
	header('Location: index.html');
}
?>
	