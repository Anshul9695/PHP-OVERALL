<?php
#normal variable with local scope
function test()
{
	$a=10;
	echo $a;
	echo '</hr>';
	echo $a++;
	echo $a;
	echo '<hr/>';
}

echo test();
echo test();
echo test();
echo test();

?>