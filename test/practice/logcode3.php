<?php
include 'functions.php';
$dbemail="ashutoshmishra.cicst@gmail.com";
$dbpass="admin";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
		$email=isset($_POST['email'])?$_POST['email']:NULL;
		$password=isset($_POST['password'])?$_POST['password']:NULL;
		$email=sanitise($email);
		$password=sanitise($password);
	 if(is_null($email) or empty($email))
	 {
		 header("location:{$_REQUEST['/']}?action=email&msg=303");
		 exit;
	 }
	 if(is_null($password) or empty($password))
	 {
		 header("location:{$_REQUEST['/']}?action=password&msg=304");
		 exit;
	 }
	 
	 if(!empty($email) and !empty($password))
	 {
		 if($email==$dbemail) and ($password==$dbpass))
		 {
			 session_start();
			 $_SESSION['user']=array('name'=>'admin','email'=>$email,'password'=>$password);
			 header("location:dashboard2.php?_status=login-success");
			 
		 }
		 else
		 {
			 header("location:{$_REQUEST['/']}?msg=305"); 
		 }
		 
	 }

	}
	else
	{
		header("location:{$_REQUEST['/']}?msg=302");
	}
}
else
{
	header("location:{$_REQUEST['/']}?msg=301");
}

?>