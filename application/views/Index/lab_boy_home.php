<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Clinical Lab </title>
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
				<h1><a  href="index.html">Clinical<span> Lab </span></a></h1>
			</div>
				<!-- top-nav -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url('User/home')?>" class="active">Home</a></li>
					
					
				<!-- 	<li><a href="contact.html">User Request</a></li>
					<li><a href="codes.html">Payment Details</a></li> -->
					<!-- <li><a href="">Change Password</a></li> -->
					<li><a href="<?php echo base_url('Index/logout')?>">Logout</a></li>
				</ul>	
				<div class="clearfix"> </div>	
			</div>
		</nav>
	</div>
</div>



<br><br><br><br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>

<h2 align="center">Manage Sample</h2>
<br><br>


<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Patient Name</th>
      <th>Test Name</th>
      <th>Price</th>
      <th>Time</th>
      <th>Date</th>
      <th>Booking Status</th>
      <th>Payment Status</th>
      <th>Sample Status</th>
      <th>Sample Status</th>
     
    </tr>
    <?php
    foreach ($booking as $fetch) {
    	if($fetch->payment_status=='Payed' and $fetch->lab_updations!='Sample Reached the Lab')
    	{
    
    ?>
    <tr>
      <td><?php echo $fetch->name?></td>
       <td><?php echo $fetch->test_name?></td>
       <td><?php echo $fetch->price?></td>
       <td><?php echo $fetch->time?></td>
       <td><?php echo $fetch->b_date?></td>
       <td><?php echo $fetch->booking_status?></td>
        <td><?php echo $fetch->payment_status?></td>
          <td><?php echo $fetch->lab_updations?></td>
       <td><form method="post" action="<?php echo base_url('index/sample_updation/'.$fetch->book_id)?>">
       	<select name="lab_updation">
       	<option value="Sample Collected">Sample Collected</option>
       	<option value="Sample Reached the Lab">Sample Reached the Lab</option>
       </select>
       <input type="submit" name="">
   </form>
   </td>

       
       

    </tr>
    <?php
}
}
?>
   
  </table>
</div>

</body>
</html>























<div style="background-color: grey">
	
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