<?php
$pass='1234';
$enc_pass=md5($pass);
echo $enc_pass;
echo '<hr>';
?>

<?php
#hash randum encryption
$pass=rand(1111,9999);
$enc_pass=md5($pass);
echo $enc_pass;
echo '<hr>';
?>

<?php
#hash randum encryption password
$pass=time();
$enc_pass=md5($pass);
echo "password is:".$pass;
echo '<br/>';
echo "Encrypetd password:  ".$enc_pass;
?>