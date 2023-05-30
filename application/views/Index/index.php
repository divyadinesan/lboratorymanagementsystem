<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Lab Management System</title>
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
<!--animate-->
<link href="<?php echo base_url('Assets/Labouratory/css/animate.css')?>" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url('Assets/Labouratory/js/wow.min.js')?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
<div class="banner_w3ls w3layouts">
	<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
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
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner-info w3">
						<div class="banner-text w3l">
							<h3>Book A Test Online</h3>
							
							
							
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info w3ls">
						<div class="banner-text agileits">
							<h3>WE CARE<span>ABOUT OUR PATIENTS</span></h3>
							
						</div>
					</div>
				</li>
				<li>
					<div class="banner-info agileinfo">
						<div class="banner-text wthree">
							<h3>HELPING YOU<span>LIVE YOUR HEALTHY LIFE</span></h3>
							
						</div>
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- services -->
<div class="services_agile">
	<div class="container">
		
		<div class="services_right w3-agile">
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span><img src="<?php echo base_url('Assets/Labouratory/images/icon1.png')?>" alt=" "/></span>
				
				
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span><img src="<?php echo base_url('Assets/Labouratory/images/icon2.png')?>" alt=" "/></span>
				
			</div>
			<div class="col-md-4 list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span><img src="<?php echo base_url('Assets/Labouratory/images/icon3.png')?>" alt=" "/></span>
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->

<!-- care -->

<!-- //care -->
<div class="features_w3 agileits">
	<div class="container">
		
		<div class="fea_grids w3ls">
			<div class="col-md-6 fea_grid1">
				<div class="col-sm-4 fea_left text-center w3ls">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="<?php echo base_url('Assets/Labouratory/images/icon1.png')?>" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="col-sm-8 fea_right agileinfo">
					<h4>Consequntur</h4>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid2">
				<div class="col-sm-8 fea_right fea_two w3-agileits">
					<h4>Dignissimos</h4>
					
				</div>
				<div class="col-sm-4 fea_left fea_one text-center w3layouts">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="<?php echo base_url('Assets/Labouratory/images/icon2.png')?>" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid1 fea_bor w3-agileits">
				<div class="col-sm-4 fea_left text-center">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="<?php echo base_url('Assets/Labouratory/images/icon3.png')?>" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="col-sm-8 fea_right agileits-w3layouts">
					<h4>Aspernatur</h4>
					
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 fea_grid2 fea_bor w3">
				<div class="col-sm-8 fea_right fea_one w3l">
					<h4>Voluptatem</h4>
					
				</div>
				<div class="col-sm-4 fea_left fea_two text-center w3-agileits">
					<div class="ih-item circle effect1">
						<a href="#">
							<div class="spinner"></div>
							<div class="img"><img src="<?php echo base_url('Assets/Labouratory/images/icon4.png')?>" alt="img"></div>
								<div class="info">
								  <div class="info-back">
									
								  </div>
								</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="contact_w3agile">
	<div class="container">
		
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