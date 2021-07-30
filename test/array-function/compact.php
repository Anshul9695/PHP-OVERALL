<?php
$name='ashu';
$class='12th';
echo '<pre>';
print_r(compact('name','class'));
#extract function creation
foreach(get_defined_vars() as $key=>$value)
{
	if(!in_array($key,['_GET','_POST','_COOKIE','_FILES']))
	{
		$tmp[$key]=$value;
		
	}
	else
	{
		continue;
	}
}
echo '<pre>';
print_r($tmp);
?>