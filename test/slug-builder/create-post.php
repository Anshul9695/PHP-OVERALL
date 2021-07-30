
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['add-btn']) and !empty($_POST['add-btn'])){

		$title = isset($_POST['title'])?$_POST['title']:NULL;
		$content = isset($_POST['content'])?$_POST['content']:NULL;

		/*Printing the Varibles Values*/

		#echo $title;
		#echo $content;
		$slug=implode("-",explode(" ",$title));
		
		$slug = strtolower($slug); #Lower case Conversion
		
		
		include __DIR__.'/config/dbconnect.php';
		#print_r($con); 


		//check weather the slug exist not
		$select_sql = "select slug from tbl_post where slug = '{$slug}'";
		$result_set = mysqli_query($con,$select_sql);
		$count = mysqli_num_rows($result_set);

		if($count>0){
			//record exist
			echo "<script>";
			echo "window.alert('$slug'+'Already exist');";
			echo "window.location.href='create-post.php?msg=error';";
			echo "</script>";
			exit;
		}else{


				date_default_timezone_set("Asia/Kolkata");	
				$date = date("Y-m-d");
				$time = date("H:i:s");
				//prepare the Query and fire query
				$sql = "INSERT INTO tbl_post(title,slug,content,date,time) values('{$title}','$slug','$content','$date','$time')";
				//Fire the Query
				if(mysqli_query($con,$sql)){
					echo 'Record Inserted for user'.mysqli_insert_id($con);
				}else{
					echo "Insertion Error".mysqli_error($con);
				}

		}

		


	
		
	}
}


?>

<?php 
require_once __DIR__.'/layout/header.php';

?>
	
<?php require_once  __DIR__.'/layout/nav.php' ?>

    <div class="container h3 bg-light  rounded  text-center">
                    <div class="container bg-light border rounded ">Create Post</div>
		
            <div class=" container login-form bg-light p-5">
			
               <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post" class="form-group pl-5">

	                 <p class="form-control">Title:
	                      <input placeholder="Enter the Title"type="text" name="title" class="form-control">
	                  </p>

	                   <p class="form-control">Content:
	                     <textarea name="content" rows="5" class="form-control"placeholder="Write your blog...."cols="30"></textarea>
	                       </p>
	
	                     <p>
	                        <input type="submit"  class="btn btn-default btn-info"name="add-btn" value="Add Post">
	                         </p>

                  </form>
           </div>
       </div>

	</div>
</div>


<?php 
require_once __DIR__.'/layout/footer.php';

?>
