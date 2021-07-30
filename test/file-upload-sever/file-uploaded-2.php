<?php
if($_SERVER['REQUEST_METHOD']=='POST'):

if(isset($_POST['submit_btn']) and !empty($_POST['submit_btn'])):
	$files_arr=$_FILES['file_name']; #Two dimensional Array
	
	$filename = $files_arr['name'];
	$filetype = $files_arr['type'];
	$file_tmpname = $files_arr['tmp_name'];
	$file_size = $files_arr['size'];
	
	$upload_path=__DIR__.'/server';
	$uploaded_filename=$upload_path.$filename;
	if(move_uploaded_file($file_tmpname,$uploaded_filename)):
	echo 'file uploaded';
	else:
	echo 'file not uplaoded';
	endif;
	
else:
echo 'press upload button';
endif;
endif;	

?>
<html>
<head>
</head>
<body>
<h1>Single File uploading</h1>
<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
Select the file :<input type="file" name="file_name"/></br></br>
<input type="submit" name="submit_btn"/>
</form>
</body>
</html>
