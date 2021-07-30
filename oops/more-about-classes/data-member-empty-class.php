<?php
#Any Datamember Associated with $this becomes a part of context 
#hence its scope will remains global and will become hidden data member
class Test{
	 public function display()
	 {
		 var_dump($this->x);
	 }
}
$obj=new Test();
echo '<pre>';
var_dump($obj); #no data members
$obj->display();# undefined index $x
echo '<pre>';
$obj->x=10; #created a hidden data member =10
$obj->display();
var_dump($obj);
?>