<?php
include('session.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
mysql_connect("localhost", "root", "") or die(mysql_error());

// Selecting Database
mysql_select_db("chat") or die(mysql_error());
$user_check=$_SESSION['login_user'];
$username=$user_check;
echo $username;

$query=mysql_query("SELECT * FROM user where username='$username'");
$rows = mysql_num_rows($query);
echo $rows;
if ($rows==1) {
echo'<table border=2 bgcolor="#CCCCCC"><tr>';
while($row=mysql_fetch_array($query))
{
echo'<tr><td>',$row["Password"];
echo'</td><td>',$row["UserName"];
echo'</td><td>',$row["FirstName"];
echo'</td></tr>';
}
echo'</label></center></table>';
}
else
{
echo "Big error";
}
?>