<?php
#calling parent constructer using parent::scope keyword
class papa{
	public function __construct(){
		echo 'papa constructer</br>';
	}
}

class child extends papa{
	
	public function __construct(){
		parent:: __construct();
		echo 'child constructer</br>';
	}
}
$child=new child();
#$papa=new papa();
?>