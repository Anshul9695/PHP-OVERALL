<?php
include 'xyz.php';
namespace App{
class Test{
	public function __construct(){
		echo 'Example of Test using namespace</br>';
	}
}
$test=new Test();
}
?>