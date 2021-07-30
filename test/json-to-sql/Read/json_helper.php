<?php
function raw($keyname='')
{
	$raw_data=file_get_contents("php://input");
	$_RAW=json_decode($raw_data,true);
	if(empty($keyname))
	{
	return $_RAW;
	}
	else{
	return $_RAW[$keyname];
	}
}
?>