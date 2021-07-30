 <?php
 #Structure of opps
  #source Templete
 class Test{
	private $x;#Data members
    private $y;
private $z;
public function __construct($instance)
{
 echo "I am a constructer";
var_dump($instance);
if(is_object($instance))
{
	$instance->x=10;#instance =$this=$obj
	$instance->display($instance);
}
else{
	echo "<br/> with instance ={$instance}<hr/>";
}	
}   

public function display($instance)
{
	echo "the value of x using this is={$this->x}</br>";
	echo "the value of x using this is={$instance->x}</br>";
	echo "the value of this is= ";
	var_dump($this);
	echo '</br> comparision of this and instance=';
	var_dump(($this==$instance));
}


 }
 $obj=new Test(10); #int
 $obj=new Test($obj);#object
 
 ?>
 
