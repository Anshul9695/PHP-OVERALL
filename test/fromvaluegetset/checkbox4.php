<?php
$name=$_POST['name'];
echo $name;
$hobbies=$_POST['hobbies'];
$myhobby=implode(",",$hobbies);//convert array to string
echo $myhobby;
?>