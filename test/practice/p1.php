<?php
class Test{
	public $x;
	public $y;


	public function set($x1,$y1)
	{
		//$this->x=$x;
		//$this->y=$y;
    echo $this->result=$x1+$y1;

	}
	public function get()
	{
		//echo $this->x;
		//echo $this->y;
		  	
		
	}
}
$obj=new Test();
$obj->set(10,20);
$obj->get();

?>