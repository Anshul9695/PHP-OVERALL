<?php
#php object with stdclass
#serializetion :converting one type of object to anothoer type of object
#php object converted to json object
$studentobj=new Stdclass();
$studentobj->name='Ashu';
$studentobj->newclass="12th";
$studentobj->marks=97;
$studentobj->passed=true;


header("Content-Type:application/json");
print_r(json_encode($studentobj,JSON_PRETTY_PRINT));
exit;
?>