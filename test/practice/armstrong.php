<?php
$num=153;
$sum=0;
$temp=$num;
while($temp>0)
{
	$rem=$temp%10;
	$sum+=($rem*$rem*$rem);
	$temp=(int)($temp/10);
}
if($sum==$num)
{
	echo 'no is armstrong';
}
else{
	echo 'not armstrong';
}

?>