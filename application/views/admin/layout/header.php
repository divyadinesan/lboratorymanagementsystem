<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/bootstrap.min.css')?>" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url('Assets/admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Assets/admin/ css/style-responsive.css')?>" rel="stylesheet"/>
<!-- font CSS -->
<link href='<?php echo base_url('Asset/admin//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')?>' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/font.css" type="text/css')?>"/>
<link href="<?php echo base_url('Assets/admin/css/font-awesome.css')?>" rel="stylesheet"> 
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/morris.css" type="text/css')?>"/>
<!-- calendar -->
<link rel="stylesheet" href="<?php echo base_url('Assets/admin/css/monthly.css')?>">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo base_url('Assets/admin/js/jquery2.0.3.min.js')?>"></script>
<script src="<?php echo base_url('Assets/admin/js/raphael-min.js')?>"></script>

<script src="<?php echo base_url('Assets/admin/js/morris.js')?>"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        
        <!-- settings end -->
        <!-- inbox dropdown start-->
        
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>

</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        <span>Lab</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('/Admin/lab_add')?>">Add Lab</a></li>
                        <li><a href="<?php echo base_url('Admin/Manage_lab')?>">Manage Lab</a></li>
                         <li><a href="<?php echo base_url('Admin/verify_lab')?>">Verify Lab</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-medkit" aria-hidden="true"></i>
                        <span>Test Category</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo base_url('Admin/category')?>">Add test_category</a></li>
						<li><a href="<?php echo base_url('Admin/cat_view')?>">View test_category</a></li>
                        
                    </ul>
                </li>
                
              <!--   <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <span>Test</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('Admin/product')?>">Add Test</a></li>
                        <li><a href="<?php echo base_url('Admin/view_product')?>">View Test</a></li>
                    </ul>
                </li> -->
                 <li class="sub-menu">
                    <a href="<?php echo base_url('Admin/userdetails')?>">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                        <span>User details</span>
                    </a>
                    
                </li>
                
                <li class="sub-menu">
                    <a href="<?php echo base_url('Admin/paymentdetails')?>">
                        <i class="fa fa-credit-card"></i>
                        <span>Payment Details </span>
                    </a>
                    
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('Admin/changepass')?>">Change Password</a></li>
                        <li><a href="<?php echo base_url('Admin/logout')?>">Logout</a></li>
                    </ul>
                </li>
                
                
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">