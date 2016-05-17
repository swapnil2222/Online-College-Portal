<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("chat") or die(mysql_error());
$username=$_POST["username"];
$firstname=$_POST["firstname"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];


$confirmPassword = stripslashes($confirmPassword);
$password = stripslashes($password);
$confirmPassword = mysql_real_escape_string($confirmPassword);
$password = mysql_real_escape_string($password);
$role=$_POST["role"];
//for image uploading
$target_dir="uploads/";
$target_file=$target_dir . basename($_FILES["fileToUpload"]["name"]);
$file_name=$_FILES["fileToUpload"]["name"];
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

	if(isset($_POST["submit"]))
	{
	if($password==$confirmPassword)
		{
					$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check!==false)
				{
				//echo "FILE is an Image -".$check["mime"]. ".";
				$uploadOk=1;
				//echo $file_name;
				
				}
			else
				{
				echo"File is not an image";
				$uploadOk=0;
				}
				
			if(file_exists($target_file))
				{
				
				echo'<script language="javascript">';
				echo'alert("sorry file already  exists")';
				echo'</script>';
				$uploadOk=0;	
				}
		// Check file size
			else if($_FILES["fileToUpload"]["size"]>7000000)
				{
				echo'<script language="javascript">';
				echo'alert("sorry your file is too large")';
				echo'</script>';
				$uploadOk=0;
				}
			 if($imageFileType!="jpg" && $imageFileType!="jpeg" && $imageFileType!="png" && $imageFileType!="gif")
				{
					echo'<script language="javascript">';
					echo'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")';
					echo'</script>';
					$uploadOk=0;
		
				}
			else if($uploadOk==0)
				{					
				
				echo'<script language="javascript">';
				echo'alert("Sorry, your file was not uploaded.")';
				echo'</script>';
				include('signin.php');		
				}
		
			else
			{
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
					{
				//echo"The file".basename($_FILES["fileToUpload"]["name"])."has been uploaded";
				//mysql_query("INSERT INTO `image`.`data` (`id`, `imageName`, `image`) VALUES (NULL, '$file_name', '$target_file')");
				
				mysql_query("INSERT INTO `chat`.`user` (`UserId`, `UserName`, `FirstName`, `Surname`, `Email`, `RoleId`, `Image`) VALUES (NULL, '$username', '$firstname', '$surname', '$email', '$role', '$target_file')");
				$query=mysql_query("SELECT UserId FROM user WHERE firstname='$firstname' AND surname='$surname'");
				while($row=mysql_fetch_array($query))
				{
				$roleId=$row["UserId"];
				}
				mysql_query("INSERT INTO `chat`.`userpassword` (`UserId`, `Password`) VALUES ('$roleId', '$password');");
								header("Location:index.php");
			
					}
			else
					{
							echo'<script language="javascript">';
							echo'alert("Sorry, your file was not uploaded.")';
							echo'</script>';
					
					}
		
			}
		
	
				
		}
		else
		{
			echo'<script language="javascript">';
				echo'alert("Sorry, your password does not match")';
				echo'</script>';
				include('signin.php');
		
		
		}
			
	}			

?>

