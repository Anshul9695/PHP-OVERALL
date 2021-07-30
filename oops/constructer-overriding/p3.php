<?php

#constructer overriding :: same child constructer will get highest priority and
#child constructer will overriding parent constructer.
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