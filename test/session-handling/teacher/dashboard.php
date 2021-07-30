<?php
//session starting
session_start();
$session=$_SESSION['teacher'];
if($session=="")
{
	header("location:login.php?msg=307");
}
//how to get session data
$email=$session['email'];
?>


<h1>Welcome to Dashword</h1>
<h4><?php echo $email;?></h4>
<a href="logout.php">Log Out</a>