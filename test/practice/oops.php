<?php
$a=[1000,2000,30,40,50000,60];
$max=$a[0];
foreach($a as $d)
{
	if($d>$max)
	{
	$max=$d;	
	}
}
echo $max."</br>";
	

?>
<?php
$a=[100,20,30,45,450];

for($i=0;$i<=$a;$i++)
{
	print_r($a[$i]." ");
}

?>