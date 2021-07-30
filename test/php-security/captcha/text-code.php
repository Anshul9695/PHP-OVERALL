<?php
session_start();
$email=$_POST['email'];

$sess_captcha=$_SESSION['captcha'];
$captcha=$_POST['captcha'];
if($captcha==$sess_captcha)
{
	echo "captcha matched";
}
else{
	echo "captcha not matched";
}
?>