<?php
include_once 'sample.php';#to include once 
//include 'sample.php';#include multiple times code repeat
echo "Index.php <br/>";
echo "<pre>";
print_r(get_included_files());
echo "</pre>";
?>