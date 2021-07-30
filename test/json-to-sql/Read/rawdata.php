<?php
require_once __DIR__.'/logger.php';
require_once __DIR__.'/json_helper.php';

require_once __DIR__.'/../dbconnect.php';
$name=raw('name');
$mobile=raw('mobile');
$data['Name is ']=$name;
$data['mobile is ']=$mobile;
//echo $name;
//echo $email;
write_log($data);
$response=[];
$sql="insert into tbl_user(name,mobile)values('$name','$mobile')";
if(mysqli_query($con,$sql))
{
	$response['code']=200;
	$response['message']='Record Inserted';
	$response['data']=array('user_id'=>mysqli_insert_id($con));
	$response['status']='True';
}
else{
$response['code']=201;
	$response['message']='Record Inserted Error';
	$response['error']=mysqli_error($con);
	$response['status']='False';
	

}
header("Content-Type:application/json");
echo json_encode($response);

//select command

?>