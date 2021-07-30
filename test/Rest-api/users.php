<?php
require_once __DIR__.'/dbconnect.php';
switch($_SERVER['REQUEST_METHOD']):
case 'GET':

break;
case 'POST':
break;
case 'PUT':
break;

case 'DELETE':
break;
default:
echo json_encode(array('response'=>'Invalid method','status'=>false,'code'=>201),JSON_PRETTY_PRINT);
break;
endswitch;
?>