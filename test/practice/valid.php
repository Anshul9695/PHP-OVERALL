<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(isset($_POST['btn']) and !empty($_POST['btn']))
	{
	$email=isset($_POST['email'])?($_POST['email']):NULL;
	$name=isset($_POST['name'])?($_POST['name']):NULL;

	
if(is_null($email) or empty($email))
{
header("location:{$_REQUEST['/']}?action=email&msg=blank-email");		
}


if(is_null($name) or empty($name))
{
header("location:{$_REQUEST['/']}?action=name&msg=blank-name");		
}

	}
	else
	{
			header("location:name.php");
	}
}
else
{
	header("location:name.php");
}
?>