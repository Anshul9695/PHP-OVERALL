<?php
include __DIR__."/functions.php";
$no=10;
if($no%2==0)
{
	write_log("no is even");
}
else
{
	write_log("no is odd".debug_print_backtrace());
}
?>