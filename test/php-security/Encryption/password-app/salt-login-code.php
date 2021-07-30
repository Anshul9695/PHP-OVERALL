<?php
include('dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['login-btn']) and !empty($_POST['login-btn']))
{
	$email=isset($_POST['email'])?$_POST['email']:NULL;
	$password=isset($_POST['password'])?$_POST['password']:NULL;


	if(empty($email) or is_null($email))
	{
		header("location:salt-login.php?msg=invalid-email");
		exit;
	}elseif(empty($password) or is_null($password))
	{
		header("location:salt-login.php?msg=invalid-password");
         exit;
	}
	else{
         $private_key=md5('2020');
		
		$sql="select email,pass from tbl_user where email='$email'";

       $result_set=mysqli_query($con,$sql) or die("query error".mysqli_error($con));
       $count=mysqli_num_rows($result_set);
       if($count>0)
       {
       	if($row=mysqli_fetch_assoc($result_set))
       	{
       		$dbpass_hash=$row['pass'];
       	}
       	$user_hash=md5($password);
       	if($user_hash.$private_key==$dbpass_hash.$private_key)
       	{
       		echo 'login success';
       	}
       	else{
       		echo 'invalid password';
       	}
       }
       else{
       	echo 'invalid email';
       }


	}
}


}else{
	header("location:salt-login.php");
}
?>