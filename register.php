<?php 

	$link=mysql_connect("localhost","root","");
	mysql_select_db("quiz",$link);
	if(isset($_POST['submit']))
	{
		
		$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values(NULL,'".$_POST['lid']."','".$_POST['pass']."','".$_POST['name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['phone']."','".$_POST['email']."')";
		$rs=mysql_query($query)or die("Could Not Perform the Query");
		echo '<script> alert("USER REGISTERED DONE..."); </script>';
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
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>

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
							
							<li>
								<a href="cart.php">APPLY TEST</a>
							</li>
							<li class="fh5co-active">
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
		
			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container">

					<div class="container" style="font-family:'Times New Roman', Times, serif;font-size:24px;font-weight:400; ">
				<font style="font-family:'Times New Roman', Times, serif;font-size:36px;font-weight:400; ">	 <table width="100%" border="0" align="center">
   <tr>
     <td><form name="form1" method="post" action="register.php" onSubmit="return check();">
       <table width="450" class="altrowstable" id="alternatecolor" align="center">
         <tr>
           <td align="center"><div align="center" class="style7">Login Id </div></td>
           <td align="center"><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td align="center" class="style7">Password</td>
           <td align="center"><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td align="center" class="style7">Confirm Password </td>
           <td align="center"><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td align="center" class="style7">Name</td>
           <td align="center" ><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td align="center" valign="top" class="style7">Address</td>
           <td align="center" ><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td align="center" valign="top" class="style7">City</td>
           <td align="center"><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td align="center" valign="top" class="style7">Phone</td>
           <td align="center"><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td align="center" valign="top" class="style7">E-mail</td>
           <td align="center"><input name="email" type="text" id="email"></td>
         </tr>
         <tr align="center" style="background-image:url(../images/work_7.jpg)">
           <td align="center">&nbsp;</td>
           <td align="center"><input type="submit" name="submit" value="Signup">
           </td>
         </tr>
       </table>
     </form></td>
   </tr>
 </table>
	
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
							<small>(c)IMS 2019 <a href="index.php">IMS</a>. All Rights Reserved. </small>
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
