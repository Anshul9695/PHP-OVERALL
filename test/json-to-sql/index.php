<?php
define('API_PATH','http://localhost:8000/test/json-to-sql/index.php/');
require_once __DIR__.'/dbconnect.php';
$uri= basename($_SERVER['REQUEST_URI']);
echo $uri;

$values=explode('/',API_PATH."/{$uri}");
print_r($values);
?>