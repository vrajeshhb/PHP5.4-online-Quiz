<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	session_start();
	if(isset($_SESSION['user']))
	{
	
		if(isset($_POST['post']))
		{
			//echo 'hello Submit..';
			$com = $_POST['comment'];
			//echo $com;
			$pid = $_POST['p_id'];
			//echo $pid;
			$u = $_SESSION['user'];
			//$sql = "INSERT INTO  `market`.`comment` (`id` ,`p_id` ,`user_name` ,`comment`)VALUES (NULL ,  'pid',  '$_SESSION['user']',  '$com')" ;
			$result = mysql_query("INSERT INTO  `market`.`comment` (`id` ,`p_id` ,`user_name` ,`comment`)VALUES (NULL ,  '$pid',  '$u',  '$com')");
			if (!$result) {
		    	echo 'Could not run query: ' . mysql_error();
		    	exit;
			}
			else
			{
			//	echo "done ok ";
			}
		}
		if($_GET['action'] == "del")
		{

			/*if($_GET['action'] == $_GET['del'])
			{*/
				//echo "in del";
				$cmt  = $_GET['pro'];
				$s = "DELETE FROM `market`.`comment` WHERE `comment`.`id` = ".$cmt." ";
				$result = mysql_query($s);
				if (!$result) {
		    		echo 'Could not run query: ' . mysql_error();
		    		exit;
				}
				else
				{
				//	echo "done ok ";
				}
		//	}
			
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


<style type="text/css">	
tr,td{
	padding: 15px 15px 15px 15px;
}
.id{
	width:300px;
}
table{
border:thick;
	border-bottom-style:outset;
}
textarea{
	resize:none;
}
.mar{
	margin-bottom:1000px;
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
							<li class="fh5co-active">
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="explore.php">Explore</a>
							</li>
							<li>
								<a href="cart.php">Cart</a>
							</li>
							<li>
								<a href="cmp.php">Compare</a>
							</li>
							<li>
								<a href="sell_product.php">Sell Product</a>
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
			<div id="fh5co-intro">
				<div class="container">
							<div class="">
							
							</div>
						</div>
				</div>
			</div>
			<!-- End Intro -->
<?php			if(isset($_GET['code']))
		{
			$id = $_GET['code'];
			$result = mysql_query("SELECT * FROM tblproduct WHERE id = '$id' ");
			if (!$result) {
	    	echo 'Could not run query: ' . mysql_error();
	    	exit;
			}
		$row = mysql_fetch_row($result);
		$p_id = $row[0];
		$name = $row[1];
		$dec = $row[2]; 
		$reatile = $row[3];
		$price = $row[5]; ?>
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					<div>
					<img src="<?php echo 'data:image;base64,'.$row[4].' '; ?> " style="height:300px; width:250px; border:outset; border-bottom-style:outset;" />
										
					<div style= "margin-right:150px;  float:right; position:relative;">
						<table border="1" style="" cellpadding="50" cellspacing="50" width="500">
							<tr>
								<td class="mar"><strong>Product Name : </strong> </td>
								<td><?php echo $name; ?></td>
							</tr>
							<tr>
								<td class="mar"><strong>Retailer Name : </strong> </td>
								<td><?php echo $reatile; ?></td>

							</tr>
							<tr>
								<td class="mar"><strong>Product Price (Per/Kg): </strong> </td>
								<td><?php echo $price; ?></td>
							</tr>
							<tr>
								<td class="mar"><strong>Product Description : </strong> </td>
								<td><?php echo $dec; ?></td>
							</tr>
														<tr>
								<td class="mar"><strong>Product Stock : </strong> </td>
								<td><?php echo $row[6]; ?></td>
							</tr>

						</table>
					
					
					</div>
					
					<div>
					<br>
					<hr>
					<div style="position:relative;">
					<form class="form-horizontal" method="POST" >
					<h3>Comments : </h3>
						<textarea placeholder="Type Comment Here." id="Address" name="comment" class="form-control input-lg" rows="4" cols="98"></textarea>		<br>
						  <button name="post" type="submit" class="btn btn-info">Post</button> 			</div>
						  <input type="hidden" name="p_id" value="<?php echo $row[0]; ?>"; />
					<br>
					</form>
	
			
					
					</div>
					
					<hr>
			<?php		$sql = "SELECT * FROM  `comment` where  p_id = '".$_GET['code']."' ORDER BY  `comment`.`id` DESC " ;
			
			$q=mysql_query($sql);
$no=0;
while($res=mysql_fetch_array($q))
{
?>
					<div style="position:relative; padding:5px 5px 0px 5px; border:thin; border:#29DECC; border-style:inset;" >
					<!--div comments...... -->
						<p style="text-align:left; text-decoration:blink; color:#FF0000;" ><?php echo $res[2]; ?> :</p>
						<p><?php echo $res[3];  ?></p>	
						<?php //code for delete buttom show.
						if($_SESSION['user']== $res[2])
						{ ?>
							<p align="right" style="padding-right:30px;"> <a href="product.php?action=del&code=<?php echo $_GET['code']; ?>&pro=<?php echo $res[0]; ?>"> <img src="../images/images.png" height="20" width="20" /> </a> </p>			
					<?php	}
						?>
					</div>
					<br>
					
					
<?php } ?>					
							</div>
						</div>
						
					</div>
					<!-- End More Works -->
<hr>

				</div>
			</div>
			<!-- End Work -->

			<div class="fh5co-spacer fh5co-spacer-md"> </div>
			
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
}
else
{
	header("location:../index.php");
} 
?>