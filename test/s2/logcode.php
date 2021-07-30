<?php
include 'functions.php';

$dbemail="ashutoshmishra.cicst@gmail.com";
$dbpass="12345";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['btn']) and !empty ($_POST['btn']))
  {
	  $email=isset($_POST['email'])? $_POST['email']:NULL;
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
		 if(($email==$dbemail) and ($password==$dbpass))
		 {
			session_start();
           $_SESSION['student']=array('name'=>'student','email'=>$email,'password'=>$password);	
      header("location:dashboard.php_status?=login-succes");		   
		 }
		 
		 else{
			 header("location:{$_REQUEST['/']}?msg=305");
		 }
	 }
	 
  }	  
  else{
	  header("location:{$_REQUEST['/']}?msg=302");
  }
}
else{
	header("location:{$_REQUEST['/']}?msg=301");
}
?>