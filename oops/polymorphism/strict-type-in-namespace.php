<?php
declare(strict_types=1); #very first line 

namespace App{ #very second line
class Test{
	public function __construct(){
		echo 'Example of Test using namespace</br>';
	}
}
#Driver code
$test=new Test();
}
?>