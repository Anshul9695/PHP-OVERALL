<?php
/*
How constructer over-riding works

*/

class papa{
	public function mobile($call){
		echo " papa calling to ";
	echo "$call by nokia 1100 ....</br>";
	}
}


class child extends papa{
	public function mobile($call)
	{    
	echo " Ashu calling to ";
		echo "$call by samsung j2......</br>";
	}
}
$papa=new papa();
$papa->mobile('mummy');
$child=new child();
$child->mobile('Rekha');


?>