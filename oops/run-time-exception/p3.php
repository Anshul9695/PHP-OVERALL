 <?php
#varag method(variable length argument)

function add(...$n) #varag method
{
$sum=0;
foreach($n as $key=>$value)
{
	$sum=$sum+$value;
}
echo $sum;
#print_r($n); Array type	
}
add();
echo '<hr>';
add(10,20);
echo '<hr>';
add(10,20,30,40);

 ?>