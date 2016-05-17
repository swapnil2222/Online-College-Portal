<?php
include('my_profile_record.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your title here</title>
<link rel="stylesheet" href="flower/styles.css" type="text/css" />

<script type="text/javascript" src="flower/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="flower/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</head>
<body>
<div id="container">
<div id="inner">


	<div id="header">
    	<h1><a href="/">Website Name</a></h1>
        <h2>your website slogan here</h2>
        
        
        <div class="clear"></div>
    </div>
	
	<div id="banner"></div>
	
	<div class="welcome-bar">
		<div class="bar-top">
			<div class="bar-title">
				<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus mi quis metus laoreet ultricies. </h3>
			</div><!--/ bar-titlte-->
			<div class="bar-button">
				<a class="button medium" href="#">Learn More</a>
			</div><!--/ bar-button-->
			<div class="clear"></div>
		</div><!--/bar-top-->	
	</div>
    
    <div id="content-bottom">
        <div class="content-bottom-inner">
<?php 
include('session.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
mysql_connect("localhost", "root", "") or die(mysql_error());

// Selecting Database
mysql_select_db("chat") or die(mysql_error());
$user_check=$_SESSION['login_user'];
$username=$user_check;

$query=mysql_query("SELECT * FROM user WHERE username='$user_check'");
$rows = mysql_num_rows($query);
echo $rows;
if ($rows==1) {
while($row=mysql_fetch_array($query))
{
echo'<ul>
       <li>
   	   <h4>Username: '.$row["UserName"].'</h4></li>';
	
	echo'<li><img src="images/1.jpg" alt="image1" width="270" /></li>';

	echo'<li><b>FirstName:</b>&nbsp;&nbsp;&nbsp;',$row["FirstName"],' </br></li>';
	echo'<li><b>SurName:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["Surname"],' </li>';
		echo'<li><b>Email:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["Email"],' </li>';
}
}

?>	
        
                <li><a href="#">Read More</a></li>
            </ul>
            
            
            <div class="clear"></div>
        </div>
 
    </div>
    
    <div class="footer">
            <p>&copy; YourSite 2012. Design by <a href="http://www.electrictowelrail.org.uk" target="_blank">Electric Towel Rails</a>  | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" title="This page validates as CSS"><abbr title="Cascading Style Sheets">CSS</abbr></a></p>
    </div>
</div>
</div>
</body>
</html>
