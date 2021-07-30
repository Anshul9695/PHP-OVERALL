<?php
#using Encryption class
require_once __DIR__.'/library/encrypt.php';

$id = encode_64('10');

?>
<a href="target.php?id=<?php echo $id;?>">Edit</a>