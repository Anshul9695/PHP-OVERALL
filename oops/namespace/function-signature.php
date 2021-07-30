<?php
function test()
{
	echo 'Test</br>';
	#hello() fatal error
	function hello()
{
	echo 'Hello from outside the class';
}

	hello();#call
}
echo test();


#hello() Error if Test is commented

?>