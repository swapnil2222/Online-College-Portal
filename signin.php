
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>SGGS</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/signin_style.css" />
	 <link rel="stylesheet" type="text/css" href="css/sample1.css" />
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
		<script src="js/modernizr.custom.63321.js"></script>
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
        .style2 {color: #FF0000}
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
		    <div id="content-bottom">
        <div class="content-bottom-inner">
            <ul>
            	<li>
   	      <center><h4>User SignUp</h4></center></li>
               <li>  <form class="form-4" name="login" method="post" enctype="multipart/form-data" action="valid_signin.php" >
			    <p>
			        <label for="login">Username or email</label>
			        UserName<span class="style2">*</span>
			        <input type="text" name="username" placeholder="Required during login" required>
		        </p>
				<p>
			        <label for="login">FirstName</label>
			        FirstName<span class="style2">*</span>
			        <input type="text" name="firstname" placeholder="Your firstname" required>
		        </p>
				<p>
				<label for="login">SurName</label>
			       SurName<span class="style2">*</span> &nbsp;
			        <input type="text" name="surname" placeholder="Your surname" required>
		        </p>
			   <p>
				<label for="email">Email</label>
			       Email<span class="style2">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			        <input type="text" name="email" placeholder="Your email" required>
		        </p>
			   
			    <p>
			        <label for="password">Password</label>
			       Password<span class="style2">*</span>&nbsp;&nbsp;<input type="password" name='password' placeholder="Enter Password" required> 
		        </p>
				<p>
			        <label for="password">Password</label>
			        Confirm<span class="style2">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name='confirmPassword' placeholder="Re-enter Password" required> 
		        </p>
				<p>
			        &nbsp;&nbsp;<label for="password">Role</label>
			        Role<span class="style2">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='role'  required >
					<option>1</option>
					<option>2</option>
					</select> 
		        Student/ Staff </p>
				<p>
				<label for="email">Email</label>
	       		 &nbsp;Image<span class="style2">*</span></p>
					<p>
				      <input type="file" name="fileToUpload" required  id="fileToUpload" />
			        </p>
					<p align="center">
				       <input type="submit" name="submit" value="Register">
		        <span><strong class="error"><br></strong></span></p>
				   <p align="center"><span><strong class="error"><?php echo $error ?></br>
			      </strong></span> </p>
		  </form>
		      </section>
 </li>
            </ul>
            
            
            <div class="clear"></div>
        </div>
 
    </div>

            
            
		
</div>
    <div align="center"></div>
</body>
</html>