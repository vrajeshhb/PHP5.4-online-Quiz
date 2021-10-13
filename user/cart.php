<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("market",$link);
	session_start();
	if(isset($_SESSION['user']))
	{
	

if(isset($_GET['action'])=="remove")
{ 
	
	if(!empty($_SESSION["cart_item"])) {

			foreach($_SESSION["cart_item"] as $k => $v) {
					//print_r( $v); echo "<br> <br>$k<br><br>";
					//echo $_SESSION["cart_item"][1]["code"]; echo" <br> <br>"; 
					if($_SESSION["cart_item"][$k]["code"] == $_GET["code"]){
						unset($_SESSION["cart_item"][$k]);
						}				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
		
}


if(isset($_GET["clear"]))
{
	unset($_SESSION["cart_item"]);
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


<?php
// buy code...

if(isset($_GET['buy']))
{

		if(!empty($_GET['check_list']))
		{
			foreach( $_GET['check_list'] as $index => $code )
			{
					foreach($_SESSION["cart_item"] as $k => $v)
					{
						if($_SESSION["cart_item"][$k]["code"] == $code)
						{
							$required_stock = $_SESSION["cart_item"][$k]["quantity"];
							/*geting avail. stock from database*/
							//echo $code;
							$result = mysql_query("SELECT amount, retailer FROM tblproduct WHERE id = $code ");
							if (!$result)
							{
								echo "error #1";
							    echo 'Could not run query: ' . mysql_error();
							    exit;
							}
							$row = mysql_fetch_row($result);
							$avail_stock = $row[0];
							$retailer = $row[1];
							
							/*checking for amount requied by user is present or not*/
							if($avail_stock >= $required_stock)
							{
								$update_stock = $avail_stock - $required_stock;
								/*udateing stock query*/
								$fire1 = mysql_query("UPDATE  `market`.`tblproduct` SET  `amount` =  '".$update_stock."' WHERE  `tblproduct`.`id` = '".$code."' ");
								if (!$fire1)
								{
									echo "error #2";
							  		  echo 'Could not run query: ' . mysql_error();
							   		  exit;
								}
								
								/*genrating user history*/
								$fire2 = mysql_query("INSERT INTO `market`.`user_buy` (`id`, `user`, `p_name`, `r_name`, `amount`, `price`, `date`) VALUES (NULL, '".$_SESSION['user']."', '".$_SESSION["cart_item"][$k]["name"]."', '".$retailer."', '".$_SESSION["cart_item"][$k]["quantity"]."', '".$_SESSION["cart_item"][$k]["price"]."', '".date("Y/m/d")."')");
								if (!$fire2)
								{
										echo "error #3";
							  		  echo 'Could not run query: ' . mysql_error();
							   		  exit;
								}
								
								//echo 'buy done';
								echo '<script language="javascript">';
								echo 'alert("Item Bought.");';
								echo '</script>';
								
								foreach($_SESSION["cart_item"] as $kb => $vb)
								{
									//print_r( $v); echo "<br> <br>$k<br><br>";
									//echo $_SESSION["cart_item"][1]["code"]; echo" <br> <br>"; 
									if($_SESSION["cart_item"][$kb]["code"] == $code)
									{
										unset($_SESSION["cart_item"][$kb]);
									}
									if(empty($_SESSION["cart_item"]))
										unset($_SESSION["cart_item"]);
								}	
								
							}
							else
							{
								//echo 'not buy';
								echo '<script language="javascript">';
								echo 'alert("Availabe Stock Is '.$avail_stock.' So, '.$required_stock.'  Can not be Bought."); ';
								echo '</script>';
							}
							
						}
					}

			}
		}
}




?>


<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}
window.onload=function(){
	altRows('alternatecolor');
}
</script>

<style type="text/css">	
	td {
				    height: 30px;
				    
				    vertical-align: bottom;	
				    
			    }


table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}

table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color:#E4E4E4;
}
.evenrowcolor{
	background-color:#CCCCCC;
}
.style1 {font-family: "Times New Roman", Times, serif}
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
							<li class="fh5co-active">
								<a href="cart.php">Cart</a>
							</li>
							<li>
								<a href="sell_product.php">Sell Product</a>
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
					<div id="fh5co-intro">
				<div class="container">
				<div class="">
				
				<?php
				
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
				<form action="cart.php" method="get">
<table width="850" class="altrowstable" id="alternatecolor">
<tbody>
<tr style="background-image:url(../images/work_6.jpg)">
<td><strong>Name</strong></td>
<td><strong>Price</strong></td>
<td> <strong>Enter Qunatity </strong> </td>
<td><strong>Action</strong></td>
<td><strong> BUY</strong></td>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td ><?php echo "Rs ".$item["price"]; ?></td>
				<td ><?php echo $item["quantity"]; ?> </td>
				<td><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" >Remove Item</a></td>
								
				<td><input type="checkbox" name="check_list[]"  value="<?php echo $item["code"]; ?>" /></td>
				<input type="hidden" name="list_q[]"  value="<?php echo $item["quantity"]; ?>" />	
				<?php //print_r(check_list); ?>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs ".$item_total; ?></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" name="clear" value="CLEAR" onClick="myFunction" /></td>
<td colspan="3" align="center"><input type="submit" name="buy" value="buy" /></td>
</tr>
</form>
</tbody>
</table>		
				
<script language="javascript">
function myFunction() {
//alert("Remove From Cart successfully. ");
location.reload();
}
</script>
				
	 <?php
}
else
{ ?> <?php
	echo "<center>";
	echo "<h5 > NO ITEMS IN CART </h5>";
		echo "</center>";
}
?>			
				
				
				
				
				
					
				
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

 
?>		



<?php

/*do nothing after this*/
}
	else
	{
		header("location:../index.php");
	}
?>