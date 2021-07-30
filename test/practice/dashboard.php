<?php
session_start();
$session=$_SESSION['user'];

if(isset($_SESSION['user']))
{
	$email=$session['email'];
}
?>
<h1>Welcome to Dashword</h1>
<h4><?php echo $email;?></h4>
<a href="logout.php">Log Out</a>