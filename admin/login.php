<?php
	$link=mysql_connect("localhost","root","");
	mysql_select_db("quiz",$link);
	session_start();
	
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		$sql="select * from mst_admin where loginid = '$uname' and pass= '$pass' ";
		$res=mysql_query($sql);
		$no=mysql_num_rows($res);
		
if (!$res) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
		
		
		
		if($no >0 )
		{ 
			$_SESSION["user"] = $uname;
			header("location:index.php");
		 }
		else
		{
			header("location:login.php?msg=err");
		}
	}
		
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IMS | Login</title>
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
	<link rel="stylesheet" href="../css/themify-icons.css">
	<!-- Icomoon Icons -->
	<link rel="stylesheet" href="../css/icomoon-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="../css/easy-responsive-tabs.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="../css/style.css">

	
	<!-- FOR IE9 below -->
	<!--[if lte IE 9]>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
	body{
		background-image:url(../images/work_4.jpg);
		background-repeat:repeat;
	}
</style>
	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			<div class="container">
				<!-- Logo -->
				
				
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				
				<!-- Main Nav -->
				
				<!-- Main Nav -->
			</div>
		</header>
		<!-- Header -->

		<main role="main">
		
			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container" align="center">
					<h1  >Login</h1>
					<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<div class="fh5co-spacer fh5co-spacer-xs"></div>
						</div>
						<?php
	if(isset($_GET['msg'])=="err")
	{ ?>
		<p style="color:#FF0000" >Invalid User name or password</p>
<?php } ?>
						<div class="col-md-8 col-md-offset-2">
							<form action="login.php" method="post">
								
										<input placeholder="User Name" id="name" name="uname" type="text" class="form-control input-lg"><br>
										<input placeholder="Password" id="Password" name="pass" type="password" class="form-control input-lg">
								<br><br>
								<input type="submit" name="submit" class="btn btn-primary btn-md" value="Send">

										<input type="reset" class="btn btn-outline btn-md" value="Reset">
								
								
							</form>	<br>
							
						</div>
						
					</div>

				</div>
							
						</div>
				</div>
			</div>
			<!-- End Intro -->
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					
							</div>
						</div>
						
					</div>
					<!-- End More Works -->


				</div>
			</div>
			<!-- End Work -->

			<div class="fh5co-spacer fh5co-spacer-md"></div>
			
			<!-- Start  Let's Chat -->
			
		</main>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				
					<center>
						<p class="fh5co-copyright">
							<small>(c)IMS 2019 <a href="../index.php">IMS</a>. All Rights Reserved. <a href="../admin/login.php">(ADMIN LOGIN) </a></small>
						</p>
					</center>
				
			</div>
		</footer>
		
		<!-- Go To Top -->
		
		
			
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
		
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
