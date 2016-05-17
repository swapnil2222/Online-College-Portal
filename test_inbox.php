<?php
include('session.php');
$user_check=$_SESSION['login_user'];
 $query=mysql_query("SELECT * from user where username='$user_check'");
 $rows = mysql_num_rows($query);

 if($rows==1) {
//echo $rows;
while($row=mysql_fetch_array($query))
{
//$id=$row["UserId"];
$email=$row["Email"];
//echo $email;
}
}
if($rows==0) {
//echo $rows;
$query=mysql_query("SELECT * from staff where username='$user_check'");
while($row=mysql_fetch_array($query))
{
//$id=$row["UserId"];
$email=$row["Email"];
//echo $email;
}
}


?>

<!DOCTYPE html> 
<html dir="ltr" lang="en-US">

<html>

<head>
  <title>SGGS</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <link rel="shortcut icon" href="images/logo_7_2.PNG" type="image/png" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <link rel="stylesheet" type="text/css" href="css/sample_staff.css" />
  <link rel="stylesheet" href="css/custom1.css"/>
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSS Drop Down Menus</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
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

.egg {
	float: left;
	position:fixed;
	text-align:justify;
}


#menu ul.sub-menu li {
	display: list-item;
    text-align: -webkit-match-parent;
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
.egg_Body{
border-top:1px solid #D1D8E7;color:#808080;}
.egg_Message{
font-size:13px !important;
font-weight:normal;
overflow:scroll;}

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
.comment_actual_text{
display:block;
padding-left:.4em}

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
    background-position: -82px 0;
    background-repeat: no-repeat;
    height: 11px;
    position: absolute;
    top: -11px;
    width: 20px;
	right: 354px;
}
.clean { display:none}
Inherited from div.clearfix
.clearfix {
    zoom: 1;
}
</style>



</head>

<body>
  <div id="main">		

    <header>
	  <div id="strapline">
	   
		<div id="welcome_slogan">
	        <h4>Welcome To Shri Guru Gobind Singhji Institute Of Engineering & Technology<br>
	        Nanded-431606, India  </h4>
			<div class="container">			
      
      
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
				
</div>			
			<li><a href="#">Downloads</a></li>
			<li><a href="logout.php">Logout<em>(<?php echo $login_session; ?>)</em></a></li>
			
          </ul>
        </div>
		</div><!--close menubar-->	
      </nav>
    
	</header>
	
    <!--close slideshow_container-->
<div id="site_content">		
	  
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
				  
                   </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
		  
           	  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
		<div class="sidebar">
          <div class="sidebar_item">
          	  </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  		
        <div class="sidebar">
          <div class="sidebar_item">
		  
             </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      </div><!--close sidebar_container-->	
	   
                     
	   
	   
	   
	  
	  <div id="content">
		   
	
	<div class="content_item">
	
	   <div id="content-bottom">
	
	
							<div class="content-bottom-inner">
		
			<?php
			
			$msql=mysql_query("select * from message order by msg_id desc");
			while($messagecount=mysql_fetch_array($msql))
			$id=$messagecount['msgID'];
			$msgcontent=$messagecount['msg'];
			?>
			<li class="egg">
				<?php 
				include('get_email.php');

				$sql=mysql_query("select * from message where toEmail='$email'");
				$msg_count=mysql_num_rows($sql);

				if($msg_count>3)
				{
				$second_count=$msg_count-3;
				} 
				else 
				{
				$second_count=0;
				}
				?>

				<div id="view_comments<?php echo $id; ?>"></div>

				 <div id="two_comments<?php echo $id; ?>">
				
				<?php
			$listsql=mysql_query("SELECT * FROM `message` WHERE toEmail='$email' ORDER BY msgId DESC LIMIT 3  ");
				
				$row=mysql_num_rows($listsql);
				if($row>0)
				{
				while($rows=mysql_fetch_array($listsql))
				{ 
				$from=$rows['fromEmail'];
				$date=$rows['msgDate'];
				$msg=$rows['msg'];
				?>

			<div class="comment_ui">

				<div class="comment_text">
					<div  class="comment_actual_text">
					<?php
						$sql=mysql_query("SELECT * from user where email='$from'");
						$row=mysql_num_rows($sql);
						if($row==1)
						{	
						while($row=mysql_fetch_array($sql))
						{
						$image=$row['Image'];
						
						}
						}
						if($row==0)
						{
						$sql=mysql_query("SELECT * from staff where email='$from'");
						while($row=mysql_fetch_array($sql))
						{
						$image=$row['Image'];
						
						}
						
						} ?>
						
						<?php
						echo '<table>
						<tr>
						<td><img src="'."$image".'" width="50px" height="50px"/></td>
						<td>&nbsp;'.$msg.'<br>&nbsp;<b>From:</b>'.$from.'</br>
							&nbsp;<b>Date:</b>'.$date.'
						 </td>
						</tr>
						
						</table>';
									
						?>
						</div>
				</div>

			</div>
				
				<?php }
				}
				else
				{
				echo 'There are no new messages for you..!!';
				}
				?>
				<div class="bbbbbbb" id="view<?php echo $id; ?>">
					<div style="background-color: #F7F7F7; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: relative; z-index: 100; padding:8px; cursor:pointer;">
					<a href="show_all_msg.php" class="view_comments" id="<?php echo $id; ?>">View all <?php echo $msg_count; ?> messages</a>
					</div>
				</div>
			</li>
				
                           <div class="clear"></div>
        </div>
		  	<!--close button_small-->		  
		  </div><!--close content_container-->	
		  
		</div><!--close content_item-->
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
