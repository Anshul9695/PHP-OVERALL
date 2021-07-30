<?php
session_start();
function csrf_token(){

	$csrf_token= md5(uniqid(rand(0,99999),true));
	$_SESSION['_token']=$csrf_token;
	return $csrf_token;
}
function csrf_validate()
{
	if(array_key_exists('_token',$_POST))
	{
$sent_token=$_POST['_token'];
	}else{
	die('no token found');
}
if($sent_token==$_SESSION['_token'])
{
	echo 'Token valid Request valid';
}
else{
	die("Invalid token".$_SERVER['REMOTE_ADDR']);
}
}

?>