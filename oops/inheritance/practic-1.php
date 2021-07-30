<?php
class papa{
	public function car()
	{
		echo "papa ki car</br>";
	}
	public function truck()
	{
		echo "papa ka truck</br>";
	}
	public function house()
	{
		echo "papa ka house</br>";
	}
	}
	
class child{
	public function bike()
	{
		echo "child ke bike</br>";
	}
	
	public function getpapaprop($classname,$method)
	{
		$this->papa=$classname;
		$this->papa->$method();
	}
}

$papa=new papa();
$child=new child();

$child->getpapaprop(new papa(),'car');
$child->getpapaprop(new papa(),'truck');
$child->getpapaprop(new papa(),'house');
?>