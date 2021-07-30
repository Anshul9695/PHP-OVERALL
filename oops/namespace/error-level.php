<?php
$arr=get_defined_constants();
foreach ($arr as $key => $value) {
if(preg_match('/E_/', $key))
{
	echo "{$key}={$value}</br>";
}
}

/*
output:-constants or error Enums 
E_ERROR=1
E_RECOVERABLE_ERROR=4096
E_WARNING=2
E_PARSE=4
E_NOTICE=8
E_STRICT=2048
E_DEPRECATED=8192
E_CORE_ERROR=16
E_CORE_WARNING=32
E_COMPILE_ERROR=64
E_COMPILE_WARNING=128
E_USER_ERROR=256
E_USER_WARNING=512
E_USER_NOTICE=1024
E_USER_DEPRECATED=16384
E_ALL=32767
*/
?>