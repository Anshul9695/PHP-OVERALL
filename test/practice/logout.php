<?php
session_start();
$session=$_SESSION['user'];
if(isset($session))
{
	if(!is_null($session) and !empty($session))
	{
		session_unset();
		session_destroy();
		header("location:login.php?msg=306");
	}
}
?>