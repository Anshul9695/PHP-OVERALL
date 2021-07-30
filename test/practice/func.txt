<?php
//test

//sanitisation
function sanitise($arg){
$arg = strip_tags($arg);
$arg = htmlentities($arg);
$arg = htmlspecialchars($arg);
$arg = trim($arg);
return $arg;
}

//For Showing Error
function show_errors($action='')
{ 

	global $msg;
	$keyname = @$_REQUEST['msg'];
	$error=@$msg[$keyname];
	$request_action = @$_REQUEST['action'];
	
	if($action==$request_action and !empty($action)){
		echo "<span style='color:red' id='spn-error'>$error</span>";//Main Varible		
		echo "<script>";
		echo "setTimeout(function(){
		document.getElementById('spn-error').style='display:none;';
		},5000);";
		echo "</script>";
	}//action compare
	if($action=='' and $request_action==NULL){	
		echo "<span style='color:red' id='spn-error'>$error</span>";//Main Varible
		echo "<script>";
		echo "setTimeout(function(){
		document.getElementById('spn-error').style='display:none;';
		},5000);";
		echo "</script>";
	}
	
}



?>