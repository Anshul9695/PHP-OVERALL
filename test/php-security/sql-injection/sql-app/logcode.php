<?php
include('dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['login-btn']) and !empty($_POST['login-btn']))
{
	$email=isset($_POST['email'])?$_POST['email']:NULL;
	


	if(empty($email) or is_null($email))
	{
		header("location:login.php?msg=invalid-email");
		exit;
	}
	else{

		echo $email;


	}
}


}else{
	header("location:login.php");
}
?>