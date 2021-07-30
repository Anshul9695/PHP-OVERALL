<?php
#Example of private :without inheritance
#private means no one can Access : for example papa ke tijori
class papa{
	private $x=100;
	private function display()
	{
		echo 'The value of x from inside private function';
		echo $this->x;
		
	}
	
	public function __construct()
	{
		echo 'The Public Constructer</br>';
		echo $this->display();
	}
}
$obj=new papa();
#$papa->display(); #fatal error cannot be access
#echo $papa->x; #fatal error cannot be Accessed
echo '<hr/>';
$obj->__construct();
?>