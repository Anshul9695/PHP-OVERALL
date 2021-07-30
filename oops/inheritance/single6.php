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
		echo $owner_name." Ka Ghar </br>";
	}
}

#child class

class child{
	public $parent_obj;
	public function bike()
	{
		echo "Child ki bike </br>";
	}
	
	public function getparentproperties($classname,$method)
	{
		$this->papa=$classname;
		#Instialisation of Instance member with parent class object
		$this->parent_obj= $this->papa;
		$this->papa->$method();
	}
	#problem ::How to Resolve scope
	
	public function myhome()
	{
		$this->papa->house(__CLASS__);
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
$child->parent_obj->truck();
?>