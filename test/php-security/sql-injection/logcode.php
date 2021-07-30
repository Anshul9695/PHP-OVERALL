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

		$sql="select * from tbl_test2 where email='$email'";
		$result_set=mysqli_query($con,$sql);


	}
}


}else{
	header("location:login.php");
}
?>