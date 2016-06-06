<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
?>
<?php 
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("chat", $connection);
if (isset($_POST['submit'])) {
$username=$_POST['username'];
$password=$_POST['password'];
$query = mysql_query("SELECT user.username, userpassword.password FROM USER INNER JOIN userpassword 
ON userpassword.userId=user.userId WHERE user.username='$username' AND userpassword.password='$password' 
");
$rows = mysql_num_rows($query);
if ($rows == 1) {
//login success
}
	$query = mysql_query("SELECT staff.username, staff.password FROM staff  WHERE staff.username='$username' AND 					 staff.password='$password' ");
$count = mysql_num_rows($query);
if($count==1)
{

}

else
{
$error="Invalid Login";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
	background: #00FF99 url(images/blurred.jpg)  no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
	background-size: cover;
	background-color: #00CCFF;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		.style1 {font-family: Arial, Helvetica, sans-serif}
        .style2 {color: #00FFFF}
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>
<body>
    <div class="container">
		
		<!-- Codrops top bar -->
      <header>
			
			<h1 align="center" class="style1"> <span class="form-5"><strong>SGGSIE&T,Vishnupuri,Nanded</strong> </span></h1>
				</header>
				<center>
				  <p>&nbsp;</p>
			 <img src="images/logo_7_2.PNG" /> 
				</center>

		<section class="main">
		  <form class="form-4" name="login" method="post" action="" >
			    <h1 align="center">Student Login </h1>
			    <p>
			        <label for="login">Username or email</label>
			        <input type="text" name="username" autofocus="" placeholder="Username or email" required>
		        </p>
			    <p>
			        <label for="password">Password</label>
			        <input type="password" name='password' placeholder="Password" required> 
		        </p>

			    <p align="center">
				       <input type="submit" name="submit" value="Log In">
				<p align="center">
		    
				<p align="center"><span><strong class="error"><?php echo $error ?></br>
			      </strong></span> </p>
				<br><p align="center">New? <a href="signin.php" class="style2">SignIn as a Guest</a></p> 
				<!--</strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgot your Password? <a href="#" class="style2">Click Here</a>-->
		  </form>
				    </section>
    </div>
</body>
</html>