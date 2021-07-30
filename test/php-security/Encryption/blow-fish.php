<?php

$pass='1234';
$enc_pass=password_hash($pass, PASSWORD_DEFAULT);
echo "hash by blow-fish={$enc_pass}</br></br>";
$length=strlen($enc_pass);
echo "length is={$length}";
echo '<hr/>';

echo "How to verify the hash bool";
var_dump(password_verify('1234',$enc_pass));
?>