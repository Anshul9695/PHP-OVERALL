
<?php require_once __DIR__.'/config/dbconnect.php';?>
<?php

 $id = isset($_POST['id'])?$_POST['id']:"";
 $id = $_GET['id'];
 $select_query = "select * from tbl_post where id='$id'";
 $result_set = mysqli_query($con,$select_query);
 $count= mysqli_num_rows($result_set);
 if($count>0){
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
		   
		    $select_sql = "select slug from tbl_post where slug ='{$slug}'";
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
		 $sql = "update tbl_post set title='$title',slug='$slug',content='$content',date='$date',time='$time' where id='$id'";
		 
		 
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

<?php
require_once __DIR__.'/layout/header.php';
?>

<h1>Edit Post</h1>

<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
   <p>Title: <input type="text" name="title" value="<?php echo $title;?>"></p>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
   <p>Content: <textarea name="content" rows="5" cols="30"><?php echo $content;?></textarea></p>
   <p><input type="submit" name="add-btn" value="EDIT-Post"></p>
</form>

<?php
require_once __DIR__.'/layout/footer.php';
?>