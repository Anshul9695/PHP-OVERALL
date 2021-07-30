<?php
$num=5;
$a=0;
$b=1;
for($i=1;$i<=$num;$i++)
{
	echo "{$a}";
	$c=$a+$b;
	$a=$b;
	$b=$c;
}
echo $num;

?>