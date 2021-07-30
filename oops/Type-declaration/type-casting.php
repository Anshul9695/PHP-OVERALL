  <?php
/*
We know that we can type cast any thing using cast operator
or type cast:intval(),strval()............
converting Array to object
string to array
*/ 

$a='hello';
echo getType($a);
echo '<hr/>';

$arr=(array)$a;
/* cast operator*/

echo getType($arr);
print_r($arr);

class Test{
	public $x=100;
	public $y=300;
	
}

echo '<hr/>';
$obj=new Test;
var_dump($obj);
echo '<hr/>';
$arr=(array)$obj;

print_r($arr);
 ?>