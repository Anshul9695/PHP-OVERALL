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
		header("location:logging.php?msg=invalid-email");
		exit;
	}elseif(empty($password) or is_null($password))
	{
		header("location:logging.php?msg=invalid-password");
         exit;
	}
	else{

		$enc_pass=md5($password);
		$sql="select email,pass from tbl_user where email='$email' and pass='$enc_pass'";

       $result_set=mysqli_query($con,$sql) or die("query error".mysqli_error($con));
       $count=mysqli_num_rows($result_set);
       if($count>0)
       {
       	echo 'login succes';
       }
       else{
       	echo 'login error';
       }


	}
}


}else{
	header("location:logging.php");
}
?>