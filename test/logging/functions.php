<?php
#<root>
#|---->logs
#          |----->data.log(dynamicaly)
#		  |------>index.php
#		   |----->functions.php
function write_log($msg,$line=__LINE__)
{
	#time zone set
	date_default_timezone_set("Asia/Kolkata");
	$date=date("y-m-d");
	$time=date("H-i-s");
	$format="At date{$date} on time {$time}";
	
	#file handling
	$fp=fopen(__DIR__."/log/data.log","a");
	$code="";
	$code.="logged".$format;
	$code.=" ".$msg;
	$system_path=dirname($_SERVER['PHP_SELF']);
	$filename=basename($_SERVER['PHP_SELF']);
	$code.="In line {$system_path}/{$filename}";
	$code.="On line".$line."\n";
	fwrite($fp,$code);
	fclose($fp);
}
?>