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
	<title>IMS| Add Addmin</title>
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


<style>
td{
padding: 20px 20px 20px 20px;
}
table{
	width:700px;
	border:thick;
	border-style:outset;
	border-color:#999999;
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
								<a href="Add_Subject.php">ADD SUBJECT</a>
							</li>
							<li>
								<a href="Add_test.php">ADD TEST</a>
							</li>
							<li>
								<a href="Add_que.php">ADD QUESTION</a>
							</li>
							<li>
								<a href="user.php">User(s)</a>
							</li>
							<li>
								<a href="tran.php">Results</a>
							</li>
							<li>
								<a href="add.php">Admin</a>
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
		<?php		if(isset($_POST['add']))
	{
		$sql = "INSERT INTO `mst_admin` ( `loginid`, `pass`) VALUES ('".$_POST['name']."', '".$_POST['pass']."');";
	$result = mysql_query($sql);
	if (!$result)
	{
		echo "error #1";
	    echo 'Could not run query: ' . mysql_error();
	    exit;
	}
	else{echo '<p style="color:red;">Admin Added.. </p>';}
	}?>
					<h4 ><u>Add Admin. </u></h4>
					<form action="add.php" method="post">
					<table cellspacing="100" border="1">
						<tr>
							<td>Name :</td>
							<td><input  class="form-control input-lg" type="text" name="name" placeholder="Username" /></td>							
						</tr>
						<tr>
							<td>Password :</td>
							<td><input type="password" name="pass"  class="form-control input-lg" placeholder="Password"/></td>							
						</tr>						
						<tr>
							<td align="center"><input type="submit" name="add" value="Add Admin" /></td>
							<td align="center"><input type="reset" name="Reset" value="Reset" /></td>							
						</tr>
					</table>
					</form>
							<div class="">
							
							</div>
						</div>
				</div>
			</div>
			<div id="fh5co-intro">
				<div class="container">
		<?php		
		if(isset($_GET['del']))
		{
				
				if(!empty($_GET["check_list"]))
				{
					foreach($_GET['check_list'] as $check)
					{
     		       		//echo $check."<br>"; 		
						$sql_up="delete from mst_admin where loginid = '".$check."' ";
						mysql_query($sql_up); 		
						
				    }
				}
		}
		
		?>
					<h4 ><u>Delete Admin. </u></h4>
					<form action="add.php" method="get">
					<table width="650" class="altrowstable" id="alternatecolor">
						<tr style="background-image:url(../images/work_6.jpg)">
							<td colspan="3"></td>
						</tr>
						<tr style="background-image:url(../images/work_7.jpg)"> 
							<td width="49" >Sr No.</td>
							<td width="250">Name </td>
							<td width="50">Select </td>
						</tr>
			<?php 			
			$sql = "SELECT * FROM  `mst_admin`  ";
			$q=mysql_query($sql);
			$no=0;	
while($res=mysql_fetch_array($q))
{
$no=$no+1;
//echo $res[0];
?>
			<tr>
					<td><?php echo "$no"; ?></td>				
					<td width="250"><?php echo $res[1]; ?></td>
					<td><input type="checkbox" name="check_list[]" value="<?php echo $res[1]; ?>" /> </td>
			</tr>
			
			<?php } ?>	
			<tr>
				<td align="center" colspan="3"><input name="del" value="Delete" type="submit" /></td>
			</tr>
			<tr style="background-image:url(../images/work_6.jpg)">
					<td  colspan="3"></td>					
			</tr>		
				</table>
					</form>
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
							<small>(c)IMS 2019 <a href="index.php">APMC</a>. All Rights Reserved.  </small>
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