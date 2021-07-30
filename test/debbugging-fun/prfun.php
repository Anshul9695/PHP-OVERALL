<?php
function pr($arg)
{
echo "<pre>";
if(is_array($arg))
{
	print_r($arg);
}
elseif(is_null($arg) or is_bool($arg) or is_object($arg))
{
	var_dump($arg);
}
else{
	echo $arg;
}
echo "</pre>";

}
pr(false);
?>