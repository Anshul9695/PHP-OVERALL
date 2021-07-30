<?php
session_start();

//logout logic
if(isset($_SESSION['teacher']))
{
	unset($_SESSION['teacher']);	
	header("location:login.php?msg=306");
	};


?>