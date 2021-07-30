<?php
$num=111;
$temp=$num;
$rev=0;
while($num>0)
{
	$rem=$num%10;
	$rev=$rev*10+$rem;
	$num=(int)($num/10);
}
if($rev==$temp)
{
	echo 'polindram';
}
else{
	echo 'not polindram';
}
?>