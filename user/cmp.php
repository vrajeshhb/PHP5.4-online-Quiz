<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	session_start();
	if(isset($_SESSION['user']))
	{
		if(isset($_POST['cmp']))
		{
			unset($_SESSION['cmp']);
		}
		if(isset($_POST['cmp1']))
		{
			unset($_SESSION['cmp1']);
		}
	


?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>APMC</title>
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
<style>

td{
	padding: 20px 10px 20px 10px;
}
.wid{
	width:200px;
}
</style>


	</head>
	<body>
		
		<!-- Header -->
		<header id="fh5co-header" role="banner">
			<div class="container">
				<!-- Logo -->
				<div id="fh5co-logo">
					<a href="index.php">
						<img src="../images/logo.png" alt="Work Logo">					</a>				</div>
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
							<li>
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">Cart</a>
							</li>
							<li>
								<a href="sell_product.php">Sell Product</a>
							</li>
							<li class="fh5co-active">
								<a href="cmp.php">Compare</a>
							</li>
							<li>
								<a href="account.php">Account</a>
							</li>
						</ul>
						<a href="logout.php" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action">Log Out(<?php echo $_SESSION["user"] ?>)</a>
					</nav>
				</div>
				<!-- Main Nav -->
			</div>
<hr>
		</header>
		<!-- Header
		
	
		 -->
<form action="cmp.php" method="post">
			
			<div   style=" width:455px; left:160px;  position:relative; border:thin;  float:left;margin-left:50px; border-style:outset; border-color:#666666; border-width:5px; " >
			<?php if (empty($_SESSION['cmp'])) { echo 'add item for compare'; } else { ?>
				<table width="455px" style="position:relative;">
					<tr> 
							<td colspan="2" align="center">
							
							<?php
							$i = $_SESSION['cmp'][0];
							$result = mysql_query("SELECT image FROM `tblproduct` WHERE id = $i");
							if (!$result) {
								    echo 'Could not run query: ' . mysql_error();
								    exit;
							}
							$row = mysql_fetch_row($result);
							//$pos = $row[0]; // shows post form faculty_full. ?>
							
							
							<img src="<?php echo 'data:image;base64,'.$row[0].' '; ?>" height="200" width="250" /><hr></td>
					</tr>
					<tr> 
							<td class="wid"><strong> Name : </strong></td>
							<td><?php echo $_SESSION['cmp'][1]; ?></td>
					</tr>
					<tr> 
							<td class="wid"><strong> Desription  : </strong></td>
							<td><?php echo $_SESSION['cmp'][2]; ?>kkhsdfkhsdhlkshsjdfhhsdgfjhdsfl</td>
					</tr>
					<tr> 
							<td class="wid"><strong>Retailer   : </strong></td>
							<td><?php echo $_SESSION['cmp'][3]; ?></td>
					</tr>
					<tr> 
							<td class="wid"><strong> Price : </strong></td>
							<td><?php echo $_SESSION['cmp'][4]; ?></td>
					</tr>
					<tr>
							<td colspan="2" align="center"><hr><input type="submit" name="cmp" value="Remove" /> </td>
					</tr>
				</table> 
				<?php } ?>
			</div>
</form>	

<!--product one compelete here -->


<form action="cmp.php" method="post">
			
			<div   style=" width:455px; left:160px;  position:relative; border:thin;  float:left;margin-left:50px; border-style:outset; border-color:#666666; border-width:5px; " >
			<?php if (empty($_SESSION['cmp1'])) { echo 'add item for compare'; } else { ?>
				<table  width="455px" style="position:relative;">
					<tr> 
							<td colspan="2" align="center">
							
							<?php
							$i = $_SESSION['cmp1'][0];
							$result = mysql_query("SELECT image FROM `tblproduct` WHERE id = $i");
							if (!$result) {
								    echo 'Could not run query: ' . mysql_error();
								    exit;
							}
							$row = mysql_fetch_row($result);
							//$pos = $row[0]; // shows post form faculty_full. ?>
							
							
							<img src="<?php echo 'data:image;base64,'.$row[0].' '; ?>" height="200" width="250" /><hr></td>
					</tr>
					<tr> 
							<td><strong> Name : </strong></td>
							<td><?php echo $_SESSION['cmp1'][1]; ?></td>
					</tr>
					<tr> 
							<td><strong> Desription  : </strong></td>
							<td><?php echo $_SESSION['cmp1'][2]; ?></td>
					</tr>
					<tr> 
							<td><strong>Retailer  : </strong></td>
							<td><?php echo $_SESSION['cmp1'][3]; ?></td>
					</tr>
					<tr> 
							<td><strong> Price : </strong></td>
							<td><?php echo $_SESSION['cmp1'][4]; ?></td>
					</tr>
					<tr align="center">
							<td colspan="2"><hr><input type="submit" name="cmp1" value="Remove" /> </td>
					</tr>
				</table> 
				<?php } ?>
			</div>
</form>	

		<main role="main">
		
			
			
							<div class="">
							
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
							<small>(c)APMD 2017 <a href="index.php">APMC</a>. All Rights Reserved. <br>
Designed by: VRAJESH BHIMAJIANI &amp;  </small>
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
		
		<script src="js/google_map.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
<?php
}
else
{
	header("location:../index.php");
} 
?>