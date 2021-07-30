<?php
$title_error="";
$content_error="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['add-btn']) and !empty($_POST['add-btn']))
	{
		$title=isset($_POST['title'])? $_POST['title']:NULL;
		$content=isset($_POST['content'])?$_POST['content']:NULL;
		
		if(is_null($title) or empty($title))
		{
		 $title_error="plese fill the title";
          //echo $title_error;	
           		  
		}
		elseif(is_null($content) or empty($content))
		{
			$content_error="plese fill the content";
			//echo $content_error;
			
		}
		else{
		$slug=implode("-",explode(" ",$title));
		$slug=strtolower($slug);
		include __DIR__.'/config/dbconnect.php';
		
	  $select_sql="select slug from practice_tbl where slug = '{$slug}'";
	  $result_set=mysqli_query($con,$select_sql);
	  $count=@mysqli_num_rows($result_set);
	  if($count>0)
	  {
		  echo "<script>";
		  echo "window.alert('$slug'+ 'Already exit');";
		  echo "window.location.href='create-post.php?msg=error;'";
		  echo "</script>";
		  exit;
	  }
	  else{
		  date_default_timezone_set("Asia/Kolkata");
		  $date=date("Y-m-d");
		  $time=date("H-i-s");
		  $sql="insert into practice_tbl(title,slug,content,date,time) values('$title','$slug','$content','$date','$time')";
		  if(mysqli_query($con,$sql))
		  {
			  echo 'Record Inserted'.mysqli_insert_id($con);
		  }
		  else{
			  echo 'Instersion error'.mysqli_error($con);
		  }
	  }
	  
		}//else close to validation
	}
	
}


?>
<?php require_once __DIR__ .'/layout/header.php';?>
<?php require_once __DIR__.'/layout/nav.php';?>
<h1>Create Post</h1></br>
<form action="<?php echo basename ($_SERVER['PHP_SELF']);?>" method="post">

Title:
<input type="text" name="title"/>
	<span class="s"><?php echo $title_error;?></span></br></br>
Content:
<textarea name="content" cols="30" rows="7">
</textarea>
	<span class="s"><?php echo $content_error;?></span></br></br>


<input type="submit" name="add-btn" value="Add Post"/>

</form></br></br>
<?php require_once __DIR__.'/layout/footer.php';?>