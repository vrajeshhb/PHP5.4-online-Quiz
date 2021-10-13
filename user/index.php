<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("quiz",$link);
	session_start();
if(isset($_SESSION['user']))
	{

?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IMS | HOME</title>
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
				<div id="fh5co-main-nav" style="color:#FF0000;">

					<nav id="fh5co-nav" role="navigation">
						<ul>
							<li >
								<a href="index.php">  | Home |  </a>
							</li>
							<li>
								<a href="account.php">| Account |</a>
							</li>
							<li>
								<a href="edit.php">| Profile Edit |</a>
							</li>
						</ul>
						<a href="logout.php" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action">| Log Out(<?php echo $_SESSION["user"] ?>) |</a>
					</nav>

				</div>

				<!-- Main Nav -->
			</div>
<hr style="color:#33FFFF">
		</header>
		<!-- Header -->

		<main role="main">
		
			<!-- Start Intro -->
					
							<div class="">
							
									
					
				<div class="container">
					<div class="row fh5co-pricing-table-1">
					
						<div class="col-md-12" >
							<div class="fh5co-spacer fh5co-spacer-xs"></div>
						</div>
						<?php 
								$sql = "SELECT * FROM `mst_test` ";
								$q=mysql_query($sql);
								$no = 0;
								while($res=mysql_fetch_array($q))
								{
									$no = $no +1; 
							 ?>
				<form action="explore.php" method="post">
						<div style="padding-bottom:50px" style="height:200px;" class="col-md-4 col-sm-6 fh5co-pricing-table-item">
							<div class="fh5co-pricing-table-item-heading" style="height:200px;">
								
								<h5>TEST NAME : <?php echo "$res[2]"; ?><span></span></h5>
								<?php
								$result = mysql_query("select * from mst_subject where sub_id = '".$res[1]."' ");
								if (!$result) {
								    echo 'Could not run query: ' . mysql_error();
								    exit;
								}
								$row = mysql_fetch_row($result);
								$sname = $row[1]; // shows post form faculty_full.
								 ?>
								<p>TEST SUBJECT :<?php echo $sname; ?></p>
								<p>QUESTIONS :<?php echo $res[3]; ?></p>
							</div>
							
							<div class="fh5co-pricing-table-item-body" style="height:200px;">
								<div class="fh5co-spacer  fh5co-spacer-xxs"></div>
								<input type="hidden" name="testid" value="<?php echo $res[0];?>" />
								<input type="hidden" name="testname" value="<?php echo $res[2];?>" />
								<input type="hidden" name="noofques" value="<?php echo $res[3];?>" />
								<p><input type="submit" name="submit" value="APPLY TEST" class="btn btn-outline btn-block fh5co-no-margin-botton"/></p></p>
								
							</div>
						</div>
						
						<div class="clearfix visible-sm-block"></div>
						

					
										</form>

					<?php }?>	
					</div>
					
				</div>
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
							<small>(c)IMS 2019 <a href="index.php">IMS</a>. All Rights Reserved.  </small>
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
		<?php
if(isset($_GET['cmp']))
{
	$id = $_GET['foo'];
	$result = mysql_query("SELECT * FROM tblproduct WHERE id = '$id' ");
	if (!$result) {
    	echo 'Could not run query: ' . mysql_error();
    	exit;
	}
	$row = mysql_fetch_row($result);
	
	$name = $row[1]; // shows post form faculty_full.
	$dec = $row[2]; // shows branch from faculty_full
	$reatile = $row[3];
	$price = $row[5];
	
	if (empty($_SESSION['cmp'])) {
     // list is empty.
		
		$c = array( $id, $name, $dec, $reatile,$price);
		$_SESSION['cmp'] = $c;
		//print_r($_SESSION['cmp']);
		//echo 'cmp set';
	}
	else if (empty($_SESSION['cmp1']))
	{
		$c = array( $id, $name, $dec, $reatile,$price);
		$_SESSION['cmp1'] = $c;
		//print_r($_SESSION['cmp1']);
		//echo 'cmp1 set';
	}
	else
	{
		//echo 'Remove the One item To Put '.$name.' In Compare..';
		echo '<script language="javascript">';
		echo 'alert("Remove Items From Compare. To Add new One.  ")';
		echo '</script>';
	}
	
}
?>
	</body>
</html>
<?php
function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}

	

	if(isset($_GET['cart']))
	{
			$productByCode = runQuery("SELECT * FROM tblproduct WHERE id='" . $_GET["foo"] . "'");
			$itemArray = array($productByCode[0]["id"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["id"], 'quantity'=>$_GET["quantity"], 'price'=>		$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["id"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["id"] == $k)
								 $_SESSION["cart_item"][$k]["quantity"] = $_GET["quantity"];
					}
					echo '<script language="javascript">';
				echo 'alert("Added to cart successfully. ")';
				echo '</script>';
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
					echo '<script language="javascript">';
				echo 'alert("Added to cart successfully. ")';
				echo '</script>';
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
				echo '<script language="javascript">';
				echo 'alert("Added to cart successfully. ")';
				echo '</script>';
			}
			
			
			
}




?>
<?php
}
	else
	{
		header("location:../index.php");
	}
?>