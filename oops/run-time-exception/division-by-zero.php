<?php
#Example Run time Exception
$n1=5;
$n2=1;
#when no1= 10 and no2 =5 result=2
$result=$n1/$n2;
echo $result;
echo "<hr/>";
echo "Exception when no2 =0</br>";

$no1=5;
$no2=0;

try{
	if($no2==0)
	{
		throw new Exception("Try Another no");
	}
	$result=$no1/$no2;
	echo $result;
}
catch(Exception $e)
{
	echo 'Exception occured';
}


?>