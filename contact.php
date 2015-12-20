<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>

<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Plumbed Right</title>
	<meta name="description" content="www.Plumbed Right.com">
	<meta name="author" content="www.Plumbed Right.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>
    
</head>
<body>
<div class="wrap-body">
	<div id="utilitybar" class="utilitybar">
		<div class="ubarinnerwrap">
			<div class="topphone">
				<i class="fa fa-phone-square fa-1x">
					Call us:(0499)281-430
				</i>
			
			</div>
			<div class="topphone">
				<i class="fa fa-envelope-o fa-1x">
					Mail us:info@plumbedright.biz
				</i>
			
			</div>
			<div class="toplogo">
				Plumbed-Right
			</div>
		</div>
	</div>
<!--////////////////////////////////////Header-->
<header>
	<div class="zerogrid">
		<div style="clear:both;"></div>
		<div class="wrap-header">
			
			<div class="wrap-col1">
				<div class="logo"><img src="images/logo001.svg"/></div>	
			</div>
			<div class="wrap-col2">
				<nav id="menu-wrap">
					<div id="menu-trigger">Menu</div>    
					<ul id="menu" style="display: none;">
						<li><a href="home.html">Home</a></li>
						<li><a href="capability.html">Our Capabilitys</a></li>
						<li><a href="people.html">Our People</a></li>
						<li><a href="present-projects.html">Projects</a></li>
						<li><a href="careers.html">Careers</a></li>
						<li><a class="active" href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div style="clear:both;"></div>
		<!--
		<nav id="menu-wrap"><div id="menu-trigger">Menu</div>    
			<ul id="menu" style="display: none;">
				<li><a href="home.html">Home</a></li>
				<li><a href="capability.html">Our Capabilitys</a></li>
				<li><a href="people.html">Our People</a></li>
				<li><a href="#">Projects</a>
					<ul>
						<li>
							<a href="past-projects.html">Past Projects</a>
						</li>
						<li>
							<a href="present-projects.html">Present Projects</a>
						</li>
					</ul>
				</li>
				<li><a href="careers.html">Careers</a></li>
				<li><a href="contact.html">Contact Us</a></li>
			</ul>
		</nav>-->
		<div class="slider">
			<!-- Slideshow -->
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<img src="images/plumbed right images/slider0/slider01.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider02.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider03.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider04.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider05.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider06.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider07.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
					<li>
						<img src="images/plumbed right images/slider0/slider08.jpg" alt="">
						<p class="caption">Our company-Plumbed Right</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>

<section id="container">
	<div class="wrap-container">
		<div class="zerogrid">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						<h3>Contact Info</h3>
						<h5>General Enquiries</h5>
						<p>info@plumbedright.biz</p>
						<h5>Estimating Enquiries</h5>
						<p>estimating@plumbedright.biz</p>
						<h5>Account Enquires</h5>
						<p>accounts@plumbedright.biz</p>
						<h5>Director: Michael Treble</h5>
						<p> PO BOX…………………..</p>
						<p> michael@plumbedright.biz</p>
						<p>  0499 281 430</p>
					</div>
				</div>
				<div class="col-2-3">
						<div class="wrap-col4">
							<div class="contact">
								<h3>Contact Form</h3>
								<div id="contact_form">
									<form name="form1" id="ff" method="post" action="contact.php">
										<label class="row">
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
												</div>
											</div>
											<div class="col-1-2">
												<div class="wrap-col">
													<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
												</div>
											</div>
										</label>
										<label class="row">
											<div class="col-2-4">
												<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="date"  name="date" id="date" placeholder="Date"/>
												</div>
											</div>
											<div class="col-1-4">
												<div class="wrap-col">
												<input type="time"  name="time" id="time" placeholder="Time"/>
												</div>
											</div>											
										</label>
										<label class="row">
											<div class="wrap-col">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message"></textarea>
											</div>
										</label>
										<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
									</form>
								</div>
							</div>
						</div>
					</div>
				<h3>Our Company Location</h3>
				<div class="col-full">
					<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJc9U7KdW6MioR4E7fNbXwBAU&key=AIzaSyBxNxVqYumszjeZDbF0iZ6wAEeHj4deCag" width="100%" height="450" frameborder="0" style="border:3px solid #ddd;"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						<div class="copy-right">
							<p>Copyright 2015 - Plumbed Right</p>
						</div>
					</div>
				</div>
				
				<div class="offset-1-3 col-1-3">
					<div class="wrap-col">
						<div class="bottom-logo t-right">
							<img src="images/logo001.svg" title="Plumbed-Right"/>
						</div>
					<!--	<div class="bottom-social t-right">
							<a href="#"><img src="images/facebook.png" title="facebook"/></a>
							<a href="#"><img src="images/twitter.png" title="twitter"/></a>
							<a href="#"><img src="images/google.png" title="google"/></a>
							<a href="#"><img src="images/pinterest.png" title="pinterest"/></a>
							<a href="#"><img src="images/instagram.png" title="instagram"/></a>
						</div>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>

</div>
</body></html>