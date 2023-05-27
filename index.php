<?php
require('db.php');
session_start();
if(isset($_POST['login']))
{
$un=$_POST['email'];
$ps=$_POST['password'];
$_SESSION['un']=$_POST['email'];
$_SESSION['']=$_POST['password'];
$sql="SELECT * FROM admin where email='$un' and password='$ps'";

$retval = mysql_query( $sql ); 
if(mysql_num_rows($retval)<=0)
{
 echo '<script language="javascript">';
    echo 'alert("Invalid Email or Password")';
    echo '</script>';
}
else
{
header("location:admin/index.php");
}
}
if(isset($_POST['login']))
{
$un=$_POST['email'];
$ps=$_POST['password'];
$_SESSION['un']=$_POST['email'];
$_SESSION['ps']=$_POST['password'];
$sql="SELECT * FROM register where email='$un' and password='$ps'";
$retval = mysql_query( $sql ); 
if(mysql_num_rows($retval)<=0)
{
 echo '<script language="javascript">';
    echo 'alert("Invalid Username or Password")';
    echo '</script>';
}
else
{
header("location:home.php");
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Innovative Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>
<!-- //web font -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	   </script>
<!-- //js -->
</head>
<body>
	<div id="google_translate_element"></div>
                    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!-- main -->
	<div class="main">
		<h1>Login</h1> 
		<div class="main-info">
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0"><h2><span>Login</span></h2></li>
						<li class="resp-tab-item" aria-controls="tab_item-1"><span>Register</span></li> 
					</ul>	
					<div class="clear"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="agileits-login">
								<form action="#" method="post">
									<input type="text" class="email" name="email" placeholder="Email" required=""/>
									<input type="password" class="password" name="password" placeholder="Password" required=""/>
									<div class="wthree-text"> 
										<ul> 
											<li>
												<label class="anim">
													<input type="checkbox" class="checkbox" required>
													<span> Remember me ?</span> 
												</label> 
											</li>
											
										</ul>
										<div class="clear"> </div>
									</div>  
									<div class="w3ls-submit">
										<div class="submit-text">
											<input type="submit" name="login" value="LOGIN"> 
										</div>	
									</div>	
								</form>
							</div> 
						</div>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-top sign-top">
								<div class="agileits-login">
									<form action="" method="post">
										<input type="text" name="username" placeholder="Username" required="">
										<input type="text" class="email" name="email" placeholder="Email" required=""/>
										<input type="password" class="password" name="password" placeholder="Password" required=""/>	
										<input type="password" class="password" name="confirmpassword" placeholder="ConfirmPassword" required=""/>
										<label class="anim">
											<input type="checkbox" class="checkbox" required>
											<span> I accept the terms of use</span> 
										</label> 
										<div class="w3ls-submit">
											<div class="submit-text">
												<input class="register" name="reg" type="submit" value="REGISTER">  
											</div>	
										</div>
									</form> 
										<?php
											require('db.php');
											// If the values are posted, insert them into the database.
											if (isset($_POST['reg']))
											{
												$email = $_POST['email'];
											    $username = $_POST['username'];
											    $password = $_POST['password'];
											    $cpassword = $_POST['confirmpassword'];
											    
											    if($password != $cpassword)
											    {
											        echo '<script language="javascript">';
											    echo 'alert("Password and confirmpassword Not Match");';
											    echo '</script>';
											     }
											    else
											    {
											          $query = "INSERT INTO `register` (email, username, password, confirmpassword) VALUES ('$email', '$username', '$password', '$cpassword')";
											          $result = mysql_query($query);
											          if($result)
											          {
											             echo '<script language="javascript">';
											    echo 'alert("Successfully Registered"); location.href="index.php"';
											    echo '</script>';
											          }
											    }
											   }
											?>
								</div>  
							</div>
						</div>
					</div>	
				</div>
				<div class="clear"> </div>
			</div>  
		</div>
	</div>	
	<!-- //main --> 
</body>
</html>