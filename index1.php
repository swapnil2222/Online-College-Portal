<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
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
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #00FF99  no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		.style1 {font-family: Arial, Helvetica, sans-serif}
        </style>
</head>
<body>
    <div class="container">
		
		<!-- Codrops top bar -->
      <header>
			
			<h1 align="center" class="style1"> <span class="form-5"><strong>SGGSIE&T,Vishnupuri,Nanded</strong> </span></h1>
				</header>
				<center>
				  <p>&nbsp;</p>
			 <img src="images/logo.jpg" width="176" height="155"/> 
				</center>

		<section class="main">
		  <form class="form-4" name="login" method="post" action="login.php">
			    <h1 align="center">Student Login </h1>
			    <p>
			        <label for="login">Username or email</label>
			        <input type="text" name="username" placeholder="Username or email" required>
		        </p>
			    <p>
			        <label for="password">Password</label>
			        <input type="password" name='password' placeholder="Password" required> 
		        </p>

			    <p>
				       <input type="submit" name="submit" value="Log In">
		        </p>       
			</form>	    </section>
    </div>
</body>
</html>