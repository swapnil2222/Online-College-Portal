<?php
include('session.php');
include('get_email.php');

?>

<!DOCTYPE html> 
<html>

<head>
  <title>SGGS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <link rel="shortcut icon" href="images/logo_7_2.PNG" type="image/png" />
  <link rel="stylesheet" href="css/custom1.css"/>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

<style type="text/css">

a {
	text-decoration: none;
	color: #838383;
}

a:hover {
	color: black;
}


#menu a {
	display: block;
	width: 40px;
}

#menu ul {
	list-style-type: none;
}

#menu li {
	float: left;
	position: relative;
	text-align: center;
}

#menu ul.sub-menu {
	position: absolute;
	left: -10px;
	z-index: 90;
	display:none;
}

#menu ul.sub-menu li {
	text-align: left;
}

#menu li:hover ul.sub-menu {
	display: block;
}
a
{	text-decoration:none; }
	

.egg{
position:relative;
box-shadow: 0 3px 8px rgba(0, 0, 0, 0.25);
background-color:#fff;
border-radius: 3px 3px 3px 3px;
border: 1px solid rgba(100, 100, 100, 0.4);
}
.egg_Body{border-top:1px solid #D1D8E7;color:#808080;}
.egg_Message{font-size:13px !important;font-weight:normal;overflow:hidden}

h3{font-size:13px;color:#333;margin:0;padding:0}
.comment_ui
{
border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;padding:6px 4px 3px 6px;width:431px; cursor:pointer;
}
.comment_ui:hover{
background-color: #F7F7F7;
}
.dddd
{
background-color:#f2f2f2;border-bottom:1px solid #e5eaf1;clear:left;float:none;overflow:hidden;margin-bottom:2px;padding:6px 4px 3px 6px;width:431px; 
}
.comment_text{padding:2px 0 4px; color:#333333}
.comment_actual_text{display:inline;padding-left:.4em}

ol { 
	list-style:none;
	margin:0 auto;
	width:500px;
	margin-top: 20px;
}
#mes{
	padding: 0px 3px;
	border-radius: 2px 2px 2px 2px;
	background-color: rgb(240, 61, 37);
	font-size: 9px;
	font-weight: bold;
	color: #fff;
	position: absolute;
	top: 5px;
	left: 554px;
}
.toppointer{
background-image:url(top.png);
    background-position: -82px 0;
    background-repeat: no-repeat;
    height: 11px;
    position: absolute;
    top: -11px;
    width: 20px;
	right: 354px;
}
.clean { display:none}

</style>

</head>

<body>
  <div id="main">		

<header>
	  <div id="strapline">
	   
		<div id="welcome_slogan">
	        <h4>Welcome To Shri Guru Gobind Singhji Institute Of Engineering & Technology<br>
	        Nanded-431606, India  </h4>
		
      
	    </div><!--close welcome_slogan-->
      </div>
	  <!--close strapline-->	  
	  <nav>
	    <div id="menubar">
          <ul id="nav">
            <li class="current"><a href="welcome.php">Home</a></li>
            <li><a href="search_staff.php">Search Staff</a></li>
            <li><a href="my_profile.php">My Profile</a></li>
	<li><a href="test_inbox.php?email= <?php echo $email; ?>">Message&nbsp;<img src="images/images/images.png" style="width:20px;" /></a>
			
<div id="menu">

						<?php
			include("db.php");
				$sql=mysql_query("select * from message where toEmail='$email'");
				$comment_count=mysql_num_rows($sql);
				if($comment_count!=0)
				{
		
					echo '<span id="mes">'.$comment_count.'</span>';
				}
			?>
		
				  
		    <li><a href="#">Downloads</a></li>
			<li><a href="logout.php">Logout<em>(<?php echo $login_session; ?>)</em></a></li>
			
          </ul>

        </div>
		<!--close menubar-->	
      </nav>
    
	</header>
	    
</div>
</div>
</div>