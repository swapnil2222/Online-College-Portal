<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = 'Username or Password is invalid';

header("location: index.php");
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
$db = mysql_select_db("customer", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from login where password='$password' AND username='$username'");
$rows = mysql_num_rows($query);
	if ($rows == 1) 
		{
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: welcome.php"); // Redirecting To Other Page
		} 
else {
$error = 'Username or Password is invalid';
echo'<script>
window.alert("username and password are incorrect")</script>';

header("location: welcome.php");

}
mysql_close($connection); // Closing Connection
}
}
?>


<form action="" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>