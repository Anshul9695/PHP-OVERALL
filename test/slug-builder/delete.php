

<?php 

require_once __DIR__.'/layout/header.php';
require_once __DIR__.'/config/dbconnect.php';

require_once __DIR__.'/helpers/debugger_helper.php';

?>
<?php 

$id=$_GET['id'];

$delete_sql="delete from tbl_post where id='$id';";
$c=mysqli_query($con,$delete_sql);
$count=mysqli_affected_rows($con);
if($count>0){
	echo "delete";
}else{
	echo "not delete".mysqli_error($con);
}
?>

<?php 
require_once __DIR__.'/layout/footer.php';
?>



