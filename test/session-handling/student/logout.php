<?php
session_start();

//logout logic
if(isset($_SESSION['student']))
{
	unset($_SESSION['student']);	
	header("location:login.php?msg=306");
	}


?>