<?php
#Exception when object and class both in outside
#no code should be out of scope 

namespace App{
class Test{
	public function __construct(){
		echo 'Example of Test using namespace</br>';
	}
}

}
$test=new Test();//no call outside the namespace 
?>