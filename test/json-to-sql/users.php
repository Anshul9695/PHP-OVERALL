<?php
require_once __DIR__.'/dbconnect.php';
switch ($_SERVER['REQUEST_METHOD']) {
	case 'GET':
		user_get();
		break;
	case 'POST':
	user_post();
	break;
	case 'PUT';
	user_put();
	break;
case 'DELETE';
	user_delete();
	break;

	default:
	echo "Invalid HTTP Method";
		break;
}
function user_get(){
	//HTTP/1.1 GET OK http://localhost/json-to-sql/users.php?id=2
	//selection is single query select*from tblname where id='';

	//HTTP/1.1 GET OK http://localhost/json-to-sql/users.php
	//All projection select *from tablename

}
?>