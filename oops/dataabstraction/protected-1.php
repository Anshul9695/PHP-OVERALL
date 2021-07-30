 <?php
 class Papa{
	 protected $property='Feild';
	 public function vakil()
	 {
		echo $this->property;
		
	 }
 }
$papa=new papa();
//echo $papa->property; 
/*
From outside but Access modified public 

*/
$papa->vakil();

 ?>