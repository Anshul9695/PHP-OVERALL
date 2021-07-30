<?php
#validate.php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn'])and !empty($_POST['btn']))
	{
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;
	
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