<?php
#wap in php example of anonymous functions
#named function

function()
{
	echo "This is function</br>";
};

#every anonymous function must be terminated 
#Anonymous function are never called but Assigned to a variable 
#and using that variable you can call that function

$x=function()
{
	echo 'Hello';
	return 2+2;
};
echo $x();

