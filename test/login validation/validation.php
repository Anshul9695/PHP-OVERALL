<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
	$email=isset($_POST['email'])?$_POST['email']:NULL;	
	$password=isset($_POST['password'])?$_POST['password']:NULL;	
	if(is_null($email)or empty($email)){
		header("location:{$_REQUEST['/']}?action=email&msg=blank-email");
	}
	elseif(is_null($password)or empty($password)){
				header("location:{$_REQUEST['/']}?action=password&msg=blank-password");
	}
	
	else{
		if($email=='ashutoshmishra.cicst@gmail.com' and $password=='12345'){
			echo 'welcome to Dashboard';
		}
		else{
			header("location:{$_REQUEST['/']}?msg=login-failed");
		}
	}
	}
	else{
		header("location:{$_REQUEST['/']}?msg=invalid-btn");
	}
}
else{
		header("location:{$_REQUEST['/']}?msg=auth-failed");
	}

?>