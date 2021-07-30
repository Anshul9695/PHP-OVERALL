<?php
#wap a program in php to explain parent constructer calling is the first line 
#of child constructer 
#All mordern framework:: code ignitor ,laravel ,phalcon
class papa{
	public $balance=0;
	public function __construct(){
		
		$this->credit();
	}
	#private scope
	private function credit(){
		$this->balance=$this->balance+5000;
	}
	public function withdraw(){
		return $this->balance;
	}
}

class child extends papa{
	
	public function __construct(){
		parent::__construct();
		echo "child constructer</br>";
		echo $this->withdraw();
		echo $this->balance;
	}
}
$child=new child();
?>