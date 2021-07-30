<?php
function write_log($msg,$line=__LINE__)
{
	date_default_timezone_set("Asia/Kolkata");
	$date=date("y-m-d");
	$time=date("h-i-s");
	$format="At date{$date} on time {$time}";
$fp=fopen(__DIR__."/log/d2.log","a");
$code="";
$code.="logged".$format;
$code.=" ".$msg;
$system_path=dirname($_SERVER['PHP_SELF']);
$filename=basename($_SERVER['PHP_SELF']);
$code.="in line {$system_path}/{$filename}";
$code.="on line".$line."\n";
fwrite($fp,$code);
fclose($fp);
	
}
?>