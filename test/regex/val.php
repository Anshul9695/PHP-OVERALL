<?php
#validate.php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn'])and !empty($_POST['btn']))
	{
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
	$name=isset($_POST['name'])?$_POST['name']:NULL;
if(is_null($name)or empty($name))
{
header("location:{$_REQUEST['/']}?action=name&msg=blank-name");	
}	
else
{
	if(!(preg_match("/^[a-zA-Z ]+$/",$name)))
	{
		header("location:{$_REQUEST['/']}?action=name&msg=invalid-name");	
	}
	else
	{
		echo $name;
	}
}
if(is_null($mobile) or empty($mobile))
{
	//blank validation
		header("location:{$_REQUEST['/']}?action=mobile&msg=blank-mobile");
}

	else{
		if(!(preg_match("/^[6-9]{1}[0-9]{9}$/",$mobile)))
			{
			header("location:{$_REQUEST['/']}?action=mobile&msg=invalid-mobile");	
			}
			else{
				echo $mobile;
			}
	}
	}
	else
	{
			header("location:{$_REQUEST['/']}");
	}
}
else
{
	header("location:{$_REQUEST['/']}");
}
?>