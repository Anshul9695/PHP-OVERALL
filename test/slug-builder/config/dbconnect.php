<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','slug_db');

#Note you can use varibles instead of ENV CONSTANTS

try{
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if(!$con){
		throw new Exception;
	}
	
}catch(Exception $e){
	
	echo 'Connection Error'.mysqli_error($con);
	echo $e->getmessage();
	exit;
}

#After Query Operation Close the Connection
// finally{ 	mysqli_close($con); }











