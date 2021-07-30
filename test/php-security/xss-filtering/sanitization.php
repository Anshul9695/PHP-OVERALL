
<?php
function sanitise($arg){
$arg = strip_tags($arg);
$arg = htmlentities($arg);
$arg = htmlspecialchars($arg);
$arg = trim($arg);
return $arg;
}
?>