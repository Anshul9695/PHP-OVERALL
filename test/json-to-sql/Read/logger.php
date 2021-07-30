<?php
function write_log($data_arr){
	$ip=$_SERVER['REMOTE_ADDR'];

	$fp=fopen('output.txt',"a+");

$data="Data written on".date('Y-m-d')."at time".date("H:i:s")."\n";
$data.="IP of request={$ip}\n";
$code="";

foreach ($data_arr as $line => $variable) {
	if(is_array($variable))
	{
		$variable=json_encode($variable);
	}
	$code.="{$line}={$variable}\n";
}

fwrite($fp,$data.$code);
fclose($fp);
}
?>