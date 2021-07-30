<?php


$msg['blank-mobile']='*blank-mobile no ';
$msg['blank-name']='blank name';
$msg['invalid-mobile']='*invalid mobile';
$msg['invalid-name']='*invalid name';
function show_errors($action='')
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