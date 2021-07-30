<?php
define('URL','http://facebook.com'); #Error even you cant define global define

namespace App{
class Test{
	public function __construct(){
		echo 'Example of Test using namespace</br>';
	}
}
$test=new Test();
}

/*Fatal error: Namespace declaration statement has to be the very first statement or after any declare call in the script in C:\xampp\htdocs\oops\polymorphism\first-line-exception-2.php on line 4*/
?>