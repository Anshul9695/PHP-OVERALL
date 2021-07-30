<?php
#constructer inheritance:: parent constructer will be inherited by child class

class papa{
	public function __construct(){
		echo 'papa constructer</br>';
	}
}

class child extends papa{
	
	public function __construct(){
		
		echo 'child constructer</br>';
	}
}
$child=new child();
#$papa=new papa();
?>