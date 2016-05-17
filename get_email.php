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
