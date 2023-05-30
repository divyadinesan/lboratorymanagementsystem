<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Clinical Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url('Assets/Labouratory/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('Assets/Labouratory/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/jquery-2.1.4.min.js')?>"></script>
<!-- //js -->
<link href="<?php echo base_url('Assets/Labouratory/https://fonts.googleapis.com/css?family=Poiret+One&display=swap')?>" rel="stylesheet">
<link href="<?php echo base_url('Assets/Labouratory/https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap')?>" rel="stylesheet">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/easing.js')?>"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="<?php echo base_url('Assets/Labouratory/js/responsiveslides.min.js')?>"></script>
</head>
<body>
<!-- header -->
<div class="header_w3l">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a  href="<?php echo base_url('index.php/index/indexindex')?>">Clinical<span> Lab </span></a></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url('index.php/index/indexindex')?>" class="active">Home</a></li>
					<li><a href="<?php echo base_url('index/about')?>">About</a></li>
					
					<li><a href="<?php echo base_url('index/contact')?>">Contact</a></li>
					<li><a href="<?php echo base_url('Admin/login')?>">Admin</a></li>
					<li><a href="<?php echo base_url('Lab/lab_login')?>">Labouratory</a></li>
					<li><a href="<?php echo base_url('User/index')?>">User</a></li>
					<li><a href="<?php echo base_url('Index/lab_boy_login')?>">Lab Boy</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>
<!-- header -->
<!-- banner -->
<div class="banner_w3ls page_head">
	
</div>
<!-- //banner -->
<div class="map all_pad">
	<div class="container">
		<h3 class="title agile">View On Map</h3>
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
		<div class="contact-grids w3layouts">
			<h3 class="title">Contact Us<span></span></h3>
				<div class="col-md-4 contact-grid agile text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1 agileits-w3layouts">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>2nd Floor, Kuriland Tower, Marar Rd, Thrissur, <span>Kerala 680001</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid agileits text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2 w3">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Call Us</h4>
						<p>+91 9564825520<span>04885 258700</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid w3 text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3 w3l">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a >labouratory@gmail.com</a><span>completelabouratory@gmail.com</span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- contact -->
<div class="contact_w3agile">
	
		<p class="agileinfo">@2023 CodeIgniter Web Framework |  <a href="https://atees.org/">ATEES Industrial Training Pvt Ltd </a></p>
	</div>
</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/bootstrap-3.1.1.min.js')?>"></script>
</body>
</html>