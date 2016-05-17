<?php
include('session.php');
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
  <!-- modernizr enables HTML5 elements and feature detects -->
  <link rel="stylesheet" type="text/css" href="css/sample.css" />
    <link rel="stylesheet" href="css/custom1.css"/>
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

<?php
include('header.php');
?>   	    
    <!--close slideshow_container-->
    <div id="site_content">		
	  
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>New Website</h2>
            <p>Welcome to our new website. Please have a look around, any feedback is much appreciated.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Latest Update</h2>
            <h3>March 2016</h3>
            <p>Summer Internship Opportunity at Center of Excellence in Signal and Image Processing</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
            <h3>February 2016</h3>
            <p>Walk-in-Interview for the post of Technical Assistant on 11th Dec.</p>         
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact</h2>
            <p>Phone: +44 (0)1234 567891</p>
            <p>Email: <a href="mailto:info@youremail.co.uk">swaprenge2222@gmail.com</a></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->	
	   
	  <div id="content">
        <div class="content_item">
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

$query=mysql_query("SELECT * FROM user inner join userrole WHERE username='$user_check' AND user.roleid=userrole.roleid");
$rows = mysql_num_rows($query);
if ($rows==1) {
while($row=mysql_fetch_array($query))
{
$image=$row["Image"];
$email=$row["Email"];

echo'<ul>
       <li><center><h4><img src="'."$image".'" width="150px" height="150px"/>
   	   </h4></center></li>';
	echo'<li><b>Username:&nbsp;&nbsp; </b>'.$row["UserName"].'</li>';

	echo'<li><b>FirstName:</b>&nbsp;&nbsp;&nbsp;',$row["FirstName"],' </br></li>';
	echo'<li><b>SurName:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["Surname"],' </li>';
	echo'<li><b>&nbsp;&nbsp;Email:&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'."$email".'">',$row["Email"],'</a> </li>';
		echo'<li><b>&nbsp;&nbsp;Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["Role"],' </li>';
echo'</ul>';
}
}
if($rows==0)
		{	

		$query=mysql_query("SELECT * FROM staff inner join userrole WHERE username='$user_check' AND staff.roleid=userrole.roleid");
		while($row=mysql_fetch_array($query))
{
$image=$row["Image"];
$email=$row["Email"];

echo'<ul>
       <li><center><h4><img src="'."$image".'" width="150px" height="150px"/>
   	   </h4></center></li>';
	echo'<li><b>Username:&nbsp;&nbsp; </b>'.$row["UserName"].'</li>';

	echo'<li><b>FirstName:</b>&nbsp;&nbsp;&nbsp;',$row["FirstName"],' </br></li>';
	echo'<li><b>SurName:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["SurName"],' </li>';
	echo'<li><b>&nbsp;&nbsp;Email:&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'."$email".'">',$row["Email"],'</a> </li>';
		echo'<li><b>&nbsp;&nbsp;Role:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$row["Role"],' </li>';
echo'</ul>';
}

		

		}

?>	
                                
     </div>
    </ul>
            
            
            <div class="clear"></div>
        </div>
 
    </div>
	
    

          <p align="justify">&nbsp;</p>
</div>
        <!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	

    <footer>
	  <div align="center"><a href="welcome.php">Home</a> | <a href="ourwork.html">Our Work</a> |  <a href="contact.html">Contact</a><br/>
	    <br/>
	   |  <a href="http://www.heartinternet.co.uk/vps/"><em>Powered by SGGSIE&T,Nanded</em></a>  | </div>
    </footer>
	
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
