
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	
    if(isset($_POST['submit-btn']) and !empty($_POST['submit-btn'])){
		$files_arr=$_FILES['file_name'];
	$filename_arr = $files_arr['name'];
	$filetype_arr = $files_arr['type'];
	$file_tmpname_arr = $files_arr['tmp_name'];
	$file_size_arr = $files_arr['size'];
	$upload_path = __DIR__.'/upload/';
	for($i=0;$i<count($filename_arr);$i++){
		$uploaded_filename = $upload_path.$filename_arr[$i];
		if(!move_uploaded_file($file_tmpname_arr[$i],$uploaded_filename)){
			echo 'Cannot Uploaded file';
			break;
		}else{
			echo "{$i} file uploaded";
		}
	}
	
	
	}else{
		echo 'Illegel action';
	}
}

?>
<html>
<head></head>
<h1>Multiple File Uploading</h1>
<body>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
select the file :<input type="file" name="file_name[]" multiple accept=".pdf"/> 
<input type="submit" name="submit-btn"/>

</form>
</body>
</html>