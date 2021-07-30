<?php
#Anonymous with arguments

$squre=function($n)
{
	return $n*$n;
};

echo $squre(10);
  echo "</br>";
#Add Anonymous 
$add=function($a,$b)
{
   return $a+$b;
   
};

echo $add(10,20);