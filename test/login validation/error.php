<?php
$msg['auth-failed']='*you sent a illegel Request';
$msg['invalid-btn']='*submit only allowed by btn';
$msg['blank-email']='*Email cannot be empty';
$msg['blank-password']='*password cannot be empty';
$msg['login-failed']='*invalid username(Email) or password';


function show_errors($action='')
{
global $msg;
$keyname=@$_REQUEST['msg'];
$error=@$msg[$keyname];
$request_action= @$_REQUEST['action'];
if($action==$request_action and !empty($action)){

echo "<span style='color:red' id='sp'>$error</span>";
echo "<script>";
echo"setTimeout(function(){
document.getElementById('sp').style='display:none';	
	
},5000);";
echo "</script>";	
}	

if($action=='' and $request_action==NULL)
{
echo "<span style='color:red' id='sp'>$error</span>";	


echo "<span style='color:red' id='sp'>$error</span>";
echo "<script>";
echo"setTimeout(function(){
document.getElementById('sp').style='display:none';	
	
},5000);";
echo "</script>";	
}
}
?>