<?php
$msg['auth-failed']='*you sent illlegal Request';
$msg['invalid-btn']='*submit allow to submit button';
$msg['invalid-email']='*Email cannot be empty';
$msg['invalid-password']='*Password cannot be empty';
$msg['login-failed']='invalid username or password';

function show_error($action='')
{
global $msg;
$keyname=@$_REQUEST['msg'];
$error=@$msg[$keyname];
$request_action= @$_REQUEST['action'];
if($action==$request_action and !empty($action)){

echo "<span style='color:red'>$error</span>";	
}	
if($action=='' and $request_action==NULL)
{
echo "<span style='color:red'>$error</span>";		
}
}
?>