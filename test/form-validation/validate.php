<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['btn']) and !empty($_POST['btn'])){
	$name=isset($_POST['name'])?$_POST['name']:NULL;	
	$mobile=isset($_POST['mobile'])?$_POST['mobile']:NULL;	
	if(is_null($name)or empty($name)){
		header("location:{$_REQUEST['/']}?action=name&msg=invalid-name");
	}
	elseif(is_null($mobile)or empty($mobile)){
				header("location:{$_REQUEST['/']}?action=mobile&msg=invalid-mobile");
	}
	}
	else{
		header("location:{$_REQUEST['/']}?msg=invalid-btn");
	}
}
	else{
		header("location:{$_REQUEST['/']}?msg=auth-failed");
	}

?>