<?php 

	
	$link=mysql_connect("localhost","root","");
	mysql_select_db("quiz",$link);
	session_start();
	$res = 0;
if(isset($_SESSION['user']))
	{
		if(isset($_POST['tsubmit']))
		{
			/*print_r($_POST['ans']);
			echo '<br>';
			print_r($_POST['foo']);
			echo '<br>';
			echo $_POST['noofques'];*/
			for( $i = 1; $i<= $_POST['noofques']; $i++ ) {
			if($_POST['ans'][$i] == $_POST['foo'][$i])
			{
				$res = $res + 1;
			}
			/*echo $_POST['ans'][$i];
			echo ' _____  ';
			echo $_POST['foo'][$i];
			echo '<br>';*/
			
         	}
			//echo '<br>';echo '<br>';echo '<br>';echo $res;
			$d = date("Y-m-d");
			$qquer = "INSERT INTO `quiz`.`mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES ('".$_SESSION['user']."', '".$_POST['tid']."', '".$d."', '".$res."');";
			mysql_query($qquer);
			 
			//echo 'Right Ans :'.$no.'  Worng Ans :'.$w; 
			echo '<a href="index.php">GO BACK TO HOMEPAGE... </a>';
			echo '<script> alert("YOUR SCORE IS : '.$res.'"); </script>';
			exit;			
		}
		
		$tname="";$tid="";$noofques="";
		if(isset($_POST['submit']))
		{
			$tname = $_POST['testname'];
			$tid = $_POST['testid'];
			$noofques = $_POST['noofques'];
			
		}
		else
		{
			header("location:index.php");
		}

?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IMS</title>
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
				<div id="fh5co-main-nav">

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
		</header>
		<!-- Header -->

		<main role="main">
		
			<!-- Start Intro -->
					
							<div class="">
							
									
					
				<div class="container">
					<div class="row fh5co-pricing-table-1">
					
						<div class="col-md-12">
						<h1 align="center" ><u>Test Name : <?php echo $tname;  ?></u></h1>

							<div class="fh5co-spacer fh5co-spacer-xs"></div>
						</div>
							
					</div>
					
				</div>
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container">
					<form action="explore.php" method="post">
					<?php
						$ress = mysql_query("select * from mst_question where test_id = '".$tid."' ");
						$no=0;
						while($res=mysql_fetch_array($ress))
						{
						$no=$no+1;
					?>
					<table align="center" width="800"  style="font-size:20px;padding: 20px 50px 20px 50px;">
					<tr>
						<td style="background-color:#CCCCCC; color:#000000;" colspan="2">QUESTION : <?php echo $res[2]; ?> </td>
					</tr> 
					<tr>
						<td> <input type="radio" name="ans[<?php echo $no; ?>]" value="<?php echo '1'; ?>" required><?php echo $res[3]; ?> </input> </td>
						<td> <input type="radio" name="ans[<?php echo $no; ?>]" value="<?php echo '2'; ?>" required><?php echo $res[4]; ?> </input>   </td>
					</tr> 
					<tr>
						<td> <input type="radio" name="ans[<?php echo $no; ?>]" value="<?php echo '3'; ?>" required><?php echo $res[5]; ?> </input>  </td>
						<td> <input type="radio" name="ans[<?php echo $no; ?>]" value="<?php echo '4'; ?>" required><?php echo $res[6]; ?> </input>  </td>
					</tr>  
					</table>
					<input type="hidden" name="foo[<?php echo $no; ?>]" value="<?php echo $res[7]; ?>"/>
					
					<br>
					<?php
					}
					?>
					<input type="hidden" name="noofques" value="<?php echo $noofques; ?>"/>
					<input type="hidden" name="tid" value="<?php echo $tid; ?>"/>
					<input  style="margin-left:80px; width:80px;" type="submit" name="tsubmit" value="SUBMIT"/>
					</form>
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
							<small>(c)INS 2019 <a href="index.php">INS</a>. All Rights Reserved. </small>
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