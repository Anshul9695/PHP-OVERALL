<?php
/*
Hierical Inheritance :Multiple child class single parent
its is type of Inheritance in which single parent class is Inheritance by multiple
child class
Note:Never Get confused with single child multiple parent such concept
is related to multiple inheritance not herrichal.
*/

class papa{
	public function getmoney($child_class)
	{
		if($child_class=='Beti')
		{
			echo 'Money sent to beti 5000</br>';
			
		}
		else{
			echo 'child is son no money to be sent Khud  Kama</br>';
		}
	}
}

class Beta extends papa{
	public function __construct(){
		echo 'Beta contructer Running.</br>';
		parent::getmoney(__class__);
	}
}

class Beti extends Papa{
	public function __construct()
	{
			echo 'Beti contructer Running.</br>';	
			parent::getmoney(__class__);
			$this->getmoney(__class__);
	}
}

$beta=new Beta();#parent single papa
$beti=new Beti();#parent single papa
?>