<?php
session_start();
$session=$_SESSION['user'];
if($session=="")
{
	header("location:login2.php?msg=307");
	$email=$session['email'];
}
?>
<h1>Welcome to Dashboard</h1>
<h4><?php echo $email;?></h4>
<a href="logout2.php">Log Out</a>
