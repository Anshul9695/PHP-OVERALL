<?php
$msg['auth-failed']='*invalid Request Send';
$msg['invalid-btn']='*Submit allowed only submit button';
$msg['blank-email']='*Email cannot be empty';
$msg['blank-password']='*Password cannot be empty';
$msg['login-failed']='*invalid email  and user name';


function show_errors($action='')
{
	global $msg;
	$keyname=@$_REQUEST['msg'];
	$error=@$msg[$keyname];
	$request_action=@$_REQUEST['action'];
	
	if($action==$request_action and !empty ($action))
	{
		echo "<span style='color:red'>$error</span>";
		if($action='' and $request_action=NULL)
		{
			echo "<span style='color:red' id='sp'>$error</span>";
		}
	}
	
	if($action=='' and $request_action==NULL)
	{
		echo "<span style='color:red' id='sp'>$error</span>";
		
	}
}
?>