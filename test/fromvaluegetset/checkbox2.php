<?php
$name=$_POST['name'];
echo $name;
$hobbies=[];
#create keys for checkbox
$i=1;
foreach($_POST as $key =>$value)
{
	if(preg_match("/hobbies_/",$key))
	{
		
		$hobbies[$i-1]=$value;
		$i++;
	}
}
//convert array csv to string csv
$str="";
foreach($hobbies as $index=>$hvalue)
{
	$str=$str.$hvalue.",";
}
$myhobby=substr($str,0,-1);//substr is used give a part of string trimmed from left and right -ve sign
//is for -negative slicing or trimming
echo $myhobby;

?>