<?php
//used to read complete data into a file
$data=file_get_contents("output.json");
echo $data;
echo "<hr/>";
var_dump($data);//jsonstring
echo "<hr/>";
echo gettype($data);
print_r($data);
echo "<hr/>";
?>