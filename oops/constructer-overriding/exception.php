<?php
#calling parent constructer using parent::scope keyword
class papa{
	public $x;
	public function __construct(){
		echo 'papa constructer</br>';
		$this->x=100;
	}
}

class child extends papa{
	
	public function __construct(){
		var_dump($this->x);#out of scope no takk perform avobe the parent::__construct()
		parent:: __construct();#this is first line of child constructer
		echo 'child constructer</br>';
				var_dump($this->x);#in scope 
	}
}
$child=new child();

#$papa=new papa();

#note:-parent constructer calling using parent scope operator must be first line 
#of child constructer because any event or opreation before parent call 
#constructer will remain out scope.
#This means Inheritance concept will be of no use .
?>