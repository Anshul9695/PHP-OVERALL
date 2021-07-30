<?php

$settings=include_once('settings.php');
define('DB_HOST',$settings['database']['host'].":".$settings['database']['port']);
define('DB_USER',$settings['database']['user']);
define('DB_PASS',$settings['database']['pass']);
 define('DB_NAME',$settings['database']['name']);


try{
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(!$con){
		throw new Exception("connection exeption", 1);
		
	}
}catch(Exception $e){
	echo "connection error".mysqli_error($con);
	echo $e->getMessage();
	exit;
}
?>