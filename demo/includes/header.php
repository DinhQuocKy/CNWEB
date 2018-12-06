<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Nhà Hàng</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="../../assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../../assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>


<!--Button Detail CSS,JS-->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="/scripts/jquery.min.js"></script>
   <script src="/bootstrap/js/bootstrap.min.js"></script>

   <!-- ajax -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="../main/index.php">
			<h2 style="color:white;font-size: 24px;" class="logo-default">NHÀ HÀNG</h2>
			</a>
			<div class="menu-toggler sidebar-toggler ">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions hide">
			<div class="btn-group">
				<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-user"></i> New User </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-basket"></i> New order </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-dark dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							
							<li>
								<a href="../includes/extra_lock.php">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="../includes/login.php">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="container">
	<div class="page-container" >
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="start <?php if(!isset($_GET['id'])) echo' active';?>">
						<a href="../main/index.php">
						<i class="icon-home"></i>
						<span class="title">Trang Chủ</span>
						<span class="selected"></span>
						</a>
					</li>
					<li <?php if(isset($_GET['id']) && ($_GET['id']== 100 || $_GET['id']== 101 || $_GET['id']== 102)) echo'class="active"';?>>
						<a href="../main/index.php?id=100">
						<i class="fa fa-cutlery"></i>
						<span class="title">Thực Đơn</span>
						<span <?php if(isset($_GET['id']) && ($_GET['id']== 100 || $_GET['id']== 101 || $_GET['id']== 102)){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
						<ul class="sub-menu">
							<li <?php if(isset($_GET['id']) && $_GET['id']== 101)echo'class="active"';?> ><a href="../main/index.php?id=101"><i class="fa fa-spoon"></i><span class="title"> Thức Ăn</span></a></li>
							<li <?php if(isset($_GET['id']) && $_GET['id']== 102)echo'class="active"';?> ><a href="../main/index.php?id=102"><i class="fa fa-coffee" aria-hidden="true"></i><span class="title"> Đồ Uống</span></a></li>
						</ul>
					</li>

					</li>
					<li <?php if(isset($_GET['id']) && ($_GET['id']== 200 || $_GET['id']== 201 || $_GET['id']== 202)) echo'class="active"';?>>
						<a href="../main/index.php?id=200">
						<i class="fa fa-calculator"></i>
						<span class="title">Thống kê</span>
						<span <?php if(isset($_GET['id']) && ($_GET['id']== 200 || $_GET['id']== 201 || $_GET['id']== 202)){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
					</li>
					<li <?php if(isset($_GET['id']) && $_GET['id']== 300) echo'class="active"';?>>
						<a href="../main/index.php?id=300">
						<i class="icon-user"></i>
						<span class="title">Nhân Viên</span>
						<span <?php if(isset($_GET['id']) && $_GET['id'] == 300){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
						<ul class="sub-menu">
						
						</ul>
					</li>
					<li <?php if(isset($_GET['id']) && ($_GET['id']== 400 || $_GET['id']== 401 || $_GET['id']== 402)) echo'class="active"';?>>
						<a href="../main/index.php?id=400">
						<i class="fa fa-cutlery"></i>
						<span class="title">Hóa Đơn</span>
						<span <?php if(isset($_GET['id']) && ($_GET['id']== 400 || $_GET['id']== 401 || $_GET['id']== 402)){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
						<ul class="sub-menu">
							<li <?php if(isset($_GET['id']) && $_GET['id']== 401)echo'class="active"';?> ><a href="../main/index.php?id=401"><i class="fa fa-spoon"></i><span class="title">Đã Thanh Toán</span></a></li>
							<li <?php if(isset($_GET['id']) && $_GET['id']== 402)echo'class="active"';?> ><a href="../main/index.php?id=402"><i class="fa fa-coffee" aria-hidden="true"></i><span class="title">Chưa Thanh Toán</span></a></li>
						</ul>
					</li>
					<li <?php if(isset($_GET['id']) && $_GET['id']== 500) echo'class="active"';?>>
						<a href="../main/index.php?id=500">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">Giỏ Hàng</span>
						<span <?php if(isset($_GET['id']) && $_GET['id'] == 500){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
						<ul class="sub-menu">
							<!-- Để submenu-->
						</ul>
					</li>
					<li <?php if(isset($_GET['id']) && $_GET['id']== 600) echo'class="active"';?>>
						<a href="../main/index.php?id=600">
						<i class="fa fa-info-circle"></i>
						<span class="title">Thông Tin Liên Hệ</span>
						<span <?php if(isset($_GET['id']) && $_GET['id'] == 600){echo'class="selected"';}else echo'class="arrow"';?>></span>
						</a>
						<ul class="sub-menu">
							<!-- Để submenu-->
						</ul>
					</li>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>