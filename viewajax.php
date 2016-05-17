 <?php
 include("db.php");

if(isSet($_POST['email']))
{
$email=$_POST['mail'];
$com=mysql_query("select * from message where toEmail='$email'");
while($row=mysql_fetch_array($com))
{
$fromEmail=$row['fromEmail'];
$msg=$row['msg'];

?>


<div class="comment_ui" >
<div class="comment_text">
	<div  class="comment_actual_text">
		<?php echo $msg; ?>
	</div>
</div>
</div>


<?php } }?>
