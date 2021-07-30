<?php
$pass='1234';
$enc_pass=md5($pass);
$salt=rand(11111,99999);
$hash_salt=md5($salt);

$hash_pass=$enc_pass.$hash_salt;
echo $hash_pass;
echo '<hr>';
?>