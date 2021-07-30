<?php
echo 'without salt maeans random hash';
$pass='1234';
$enc_pass=crypt($pass);
echo "hash by crypt={$enc_pass}</br></br>";
$length=strlen($enc_pass);
echo "length is={$length}";
echo '<hr/>';
?>

<?php
echo 'using salt maeans random hash';
$pass='1234';
$salt='2021';
$enc_pass=crypt($pass,$salt);
echo "hash by crypt={$enc_pass}</br></br>";
$length=strlen($enc_pass);
echo "length is={$length}";

?>