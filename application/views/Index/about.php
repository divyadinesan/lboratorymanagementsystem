<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
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
<script type="text/javascript" src="<?php echo base_url('Assets/Labouratory/js/numscroller-1.0.js')?>"></script>
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
<div class="about all_pad">
	<div class="container">
		<h3 class="title">About</h3>
		<div class="services-grids w3layouts">
			<div class="col-md-6 ser-right-page">
				<div class="port-2 effect-3">
                	<div class="image-box w3">
                    	<img src="<?php echo base_url('Assets/Labouratory/images/a.jpg')?>" alt=" "/>
                    </div>
                    <div class="text-desc">
                    	<h4>Labouratory</h4>
                        <p>A laboratory is a facility that provides controlled conditions in which scientific or technological research, experiments, and measurement may be performed. Laboratory services are provided in a variety of settings: physicians' offices, clinics, hospitals, and regional and national referral centers</p>
                        
                    </div>
                </div>
			</div>
			<div class="col-md-6 ser-left-page">
				<div class="services-grid w3l">
					
					<div class="services-right agileits">
						
						<p>PRIMARY HEATH CHECK UP (blood routine ,blood sugar ,lipid profile , renal function test , liver function test ,urine routine ,BP)
EXECUTIVE HEALTH CHECK UP ( complete haemogram ,blood sugar ,lipid profile , renal function test , liver function test ,urine routine ,BP , arthritis panel , diabetic panel)
  </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="services-grid agileinfo">
					
					
					<div class="clearfix"></div>
				</div>
				
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
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