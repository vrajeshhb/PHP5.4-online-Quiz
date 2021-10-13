<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	session_start();
	if(isset($_SESSION['user']))
	{
	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>APMC | Sell </title>
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
tr,td{
padding-bottom:10px;
padding-top:10px;
padding-left:10px;
}
textarea{
resize:none;
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
							<li >
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">Cart</a>
							</li>
							<li>
								<a class="fh5co-active" href="sell_product.php">Sell Product</a>
							</li>
							<li>
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
		</header>
		<!-- Header -->

		<main role="main">
		
			<!-- Start Intro -->

			<!-- End Intro -->
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
				<h3>Fill Details To Sell Products... </h3>
				<form  action="sell_product.php" method="post" enctype="multipart/form-data">
				<table  width="620">
				<tr>	
						<td><strong>Enter Product Name:	</strong></td>
						<td><input type="text" name="pname" value=""/></td>
				</tr>
				
				<tr>
					<td><strong>Enter Product Description :</strong></td>
					<td><textarea name="txt" cols="30" rows="5" ></textarea> </td>
				</tr>
				
				<tr>
					<td><strong>Enter Product Price : </strong></td>
					<td> <input type="text" name="price" size="5" /></td>
				</tr>
				
				<tr>
					<td><strong>Enter Product Stock : </strong></td>
					<td> <input type="text" name="stock" size="5" /></td>
				</tr>
				
				<tr>
					<td><strong> Select Image : </strong></td>
					<td><input type="file"  name="image"  />
				</tr>
				
				<tr align="center">
					<td><strong><input type="submit" name="submit" value="submit" /> </strong></td>
					<td><strong><input type="reset" name="reset" value="reset" /> </strong> </td>
				</tr>
				</table>
				</form>
					</div>
					</div>
					<!-- End More Works -->

<?php
if(isset($_POST['submit']))
{
	if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
	{
		echo "Please Select an Image.";
	}
	else
	{
		$image = addslashes($_FILES['image']['tmp_name']);
		$name = addslashes($_FILES['image']['name']);
		$image = file_get_contents($image);
		$image = base64_encode($image);
		//saveimage($name,$image);
		$var1= $_POST['pname'];
	$var2 = $_POST['txt'];
	$var3 = $_POST['price'];
	$var4 = $_POST['stock'];
	$r = $_SESSION['user'];
	$qry = "INSERT INTO `market`.`tblproduct` (`id`, `name`, `dec`, `retailer`, `image`, `price`, `amount`) VALUES (NULL, '$var1', '$var2', '$r','$image', '$var3', '$var4') ";
	
	$result = mysql_query($qry,$link);
	if($result)
	{
		echo 'Image uploaded';
	}	
	else
	{
		echo 'Image not uploadeed';
	}
		
	}
}	
function saveimage($name,$image)
{
	
}

?>

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