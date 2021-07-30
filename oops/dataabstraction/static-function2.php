<?php
#static variable with global scope
function test()
{
	static $a=10;
	echo "$a <hr>";
	echo $a++;
	echo "$a <hr>";
}
echo test();
echo test();
echo test();



?>