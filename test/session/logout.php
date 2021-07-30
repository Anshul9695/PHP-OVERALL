<?php
session_start();
$session=$_SESSION['user'];
//logout logic
if(isset($session))
{
	if(!is_null($session) and !empty($session))
	{
		echo "hy";
		session_unset();//unset session key
		session_destroy();//destroy the time stamp for session
		
	header("location:login.php?msg=306");
	}
}

?>