<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = 'Username or Password is invalid';
echo "$error";
//header("location: index.php");
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("chat", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("SELECT user.username, userpassword.password FROM USER INNER JOIN userpassword 
ON userpassword.userId=user.userId WHERE user.username='$username' AND userpassword.password='$password' 
");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
} 
	$query = mysql_query("SELECT staff.username, staff.password FROM staff  WHERE staff.username='$username' AND 					 staff.password='$password' ");
$count = mysql_num_rows($query);

if($count==1)
{

$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
}

else {
//$error = 'Username or Password is invalid';
echo'<script language="javascript">';
echo'alert("Username or Password is invalid")';
echo'</script>';

header("location: index.php");
}


mysql_close($connection); // Closing Connection
}
}
?>