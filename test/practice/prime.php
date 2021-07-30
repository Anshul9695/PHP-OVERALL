<?php
$num=5;
$count=0;
for($i=2;$i<$num;$i++)
{
	if($num%$i==0)
	{
		$count=$count+1;
	}
	
}
if($count>0)
{
	echo "not prime";
}
else{
	echo "prime";
}

?>