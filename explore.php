<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IMS | Explore</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfont -->
	
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lte IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			<div class="container">
				<!-- Logo -->
				<div id="fh5co-logo">
					<a href="index.html">
						<img src="images/logo.png" alt="Work Logo">					</a>				</div>
				<!-- Logo -->
				
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				
				<!-- Main Nav -->
				<div id="fh5co-main-nav">
					<nav id="fh5co-nav" role="navigation">
						<ul>
							<li >
								<a href="index.php">Home</a>
							</li>
							<li class="fh5co-active">
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">APPLY TEST</a>
							</li>
							<li>
								<a href="register.php">Register</a>
							</li>
							
						</ul>
						<a href="user/login.php" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action">Log In</a>
					</nav>
				</div>
				<!-- Main Nav -->
			</div>
		</header>
		<!-- Header -->

		<main role="main">
			
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
						<?php
						$link=mysql_connect("localhost","root","");
						mysql_select_db("quiz",$link);
						$q="SELECT * FROM  `mst_subject` ORDER BY  `mst_subject`.`sub_id` DESC  LIMIT 0 , 30 ";
	$sql=mysql_query($q,$link);
	$exit = 0;
				while($res = mysql_fetch_array($sql))
				{
	

						?>
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="#" class="fh5co-work-item js-fh5co-work-item">
								<img width="380px" height="300px" src="images/work_7.jpg" alt="Image">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg"></div>
								<div class="fh5co-overlay-text js-fh5co-overlay-text">
									<h2>TEST FOR :<?php echo "$res[1]";  ?></h2><br>
									<ul class="fh5co-categories">
										

									</ul>
								</div>
							</a>
						</div>						
<?php } ?>
						
						</div>
					</div>
					<!-- End More Works -->


				</div>
			</div>
			<!-- End Work -->

			<div class="fh5co-spacer fh5co-spacer-md"></div>
			
			

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				
					
						<center>
						<p class="fh5co-copyright">
							<small>(c)IMS 2019 <a href="index.php">IMS</a>. All Rights Reserved. </small>
						</p>
						</center>
					
			</div>
		</footer>
		
		<!-- Go To Top -->
		<a href="#" class="fh5co-gotop"><i class="ti-shift-left"></i></a>
		
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Velocity -->
		<script src="js/velocity.min.js"></script>
		<!-- Google Map -->
		
		<script src="js/google_map.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
