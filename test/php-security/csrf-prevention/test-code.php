<?php
require_once __DIR__.'/csrf.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
#echo 'valid request';
echo csrf_validate();
}
else{
echo 'invalid request';
}
?>