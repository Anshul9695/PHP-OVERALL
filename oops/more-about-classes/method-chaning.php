<?php
#method chaning :: is a concept of chaning the attribute and method
#together with a single object.
#if your class dose not support method chaning then it lead to null object
#Exception  cannot call to methodname() to null object.

class Test{
	public $a;
	public function setA($a)
	{
		$this->a=$a;
		#To Enable chaning
		return $this;
	}
	public function getA()
	{
	echo "a= {$this->a}";
	#To Enable Chaning
	return $this;
	}
}
$obj=new Test();
#Before methode chaning
echo '</br> Before Method chaning</br>';
$obj->setA('200');
$obj->getA();
$obj->setA('100');
$obj->getA();
#After method chaning 
echo '</br> After Method chaning</br>';
#$obj->setA('10')->getA()->setA('200')->getA();  use this concept  or below concept

$obj->setA('10')
               ->getA()
			   ->setA('200')
			   ->getA();
?>