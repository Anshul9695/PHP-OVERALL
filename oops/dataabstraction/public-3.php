 <?php
 #with Inheritance ::child class can Access Public Data member and data member
 #function .
 
 class papa{
	 public $x=100;
	 public function display()
	 {
		 echo 'Display from class papa</br>';
	 }
	 
 }
 
 #within the second class
 class child extends papa{
	public function __construct()
	{
		echo $this->x;
		echo '<hr/>';
		echo 'calling form child</br>';
		echo $this->display();
		
	}	
	
 }
 $child =new child();
 $child->display();
 echo $child->x;
 
 ?>