<?php
$pass='1234';
$enc_pass=sha1($pass);
echo "hash by sha1={$enc_pass}</br></br>";
$length=strlen($enc_pass);
echo "length is={$length}";
?>