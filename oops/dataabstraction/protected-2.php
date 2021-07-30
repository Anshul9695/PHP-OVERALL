 <?php
 class Papa{
	 protected $property='Feild';
	 private $pention='2000';
	 public function vakil()
	 {
		echo $this->pention;
		
	 }
	 protected function getProperty()
	 {
		 echo $this->property;
	 }
 }
 
 class child extends papa{
	 public function __construct()
	 {
		 echo 'child constructer called...</br>';
		 echo $this->property;
		 echo '</br>';
		 echo $this->pention;
		 echo '</br>';
		 echo $this->vakil();
		 echo '</br>';
		 echo 'Protected property using child context</br>';
		 echo $this->getProperty();
	 }
 }
$child=new child();
//echo $papa->property; 
/*
From outside but Access modified public 

*/
//$papa->vakil();

 ?>