<?php require_once __DIR__.'/config/dbconnect.php';?>
<?php
$id = isset($_POST['id'])?$_POST['id']:"";
$id = $_GET['id'];
$select_query="select * from practice_tbl where id ='$id'";
$result_set=mysqli_query($con,$select_query);
$count=mysqli_num_rows($result_set);
if($count>0)
{
	if($row=mysqli_fetch_assoc($result_set)){
		 extract($row);
	 }
}
 if($_SERVER['REQUEST_METHOD']=='POST'){
	   if(isset($_POST['add-btn']) and !empty($_POST['add-btn'])){
		   $title = isset($_POST['title'])?$_POST['title']:NULL;
		   $content = isset($_POST['content'])?$_POST['content']:NULL;
		   $id = isset($_POST['id'])?$_POST['id']:NULL;
		   
		   $slug=implode("-",explode(" ",$title));;
		   $slug = strtolower($slug);
		   
		    $select_sql = "select slug from practice_tbl where slug ='{$slug}'";
		    $result_set = mysqli_query($con,$select_sql);
		    $count = mysqli_num_rows($result_set);
		    if($count>0){
				//record exist
				echo "<br/> Such title Already exist<br/>";
			}else{
				
				 date_default_timezone_set("Asia/Kolkata");
		 $date =date("Y-m-d");
		 $time = date("H:i:s");
		 //prepare the query and fire the query
		 $sql = "update practice_tbl set title='$title',slug='$slug',content='$content',date='$date',time='$time' where id='$id'";
		 
		 
		 if(mysqli_query($con,$sql)){
			 $changed_count=mysqli_affected_rows($con);
			 if($changed_count>0){
				 header("location:show-post.php");
			 }else{
			        echo 'oops '  ;  
				}
		 }else{
			 echo "Insertion error".mysqli_error($con);
		 }
				
			}
	   }
   }
?>


<?php require_once __DIR__ .'/layout/header.php';?>
<?php //require_once __DIR__.'/layout/nav.php';?>
<h1>Edit Post</h1></br>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">

Title:
<input type="text" name="title"/></br></br>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
Content:
<textarea name="content" cols="30" rows="7">
</textarea></br></br>

<input type="submit" name="add-btn" value="Edit Post"/>

</form></br></br>
<?php require_once __DIR__.'/layout/footer.php';?>