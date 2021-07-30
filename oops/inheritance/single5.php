<?php
#Identity stealing without inheritance or Dependency injection

class Papa{
	public function car()
	{
		echo "Papa ki car </br>";
	}
	public function truck()
	{
		echo "papa ka truck </br>";
	}
	public function house($owner_name=__CLASS__)
	{
		echo $owner_name."Ka Ghar </br>";
	}
	
	private function insurance()
	{
		echo "Papa ka private Insurance</br>";
	}
}

#child class

class child{
	public function bike()
	{
		echo "Child ki bike </br>";
	}
	
	public function getparentproperties($classname,$method)
	{
		$this->papa=$classname;
		$this->papa->$method();
	}
	#problem ::How to Resolve scope
	
	public function myhome()
	{
		$this->papa->house(__CLASS__);
	}
	
	public function getInsurance()
	{
		$this->papa->insurance();
	}
}
$papa=new papa();
$papa->car();

#child object
$child=new child();
$child->bike();
$child->getparentproperties(new papa(),'car');
$child->getparentproperties(new papa(),'truck');
$child->getparentproperties(new papa(),'house');
$child->myhome();
$child->getInsurance();
?>