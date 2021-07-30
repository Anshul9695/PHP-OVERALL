<?php
#echo 'hello from outside first line in declare namespace first line error you are 
#excecuted 

namespace App{
class Test{
	public function __construct(){
		echo 'Example of Test using namespace</br>';
	}
}
$test=new Test();
}
?>