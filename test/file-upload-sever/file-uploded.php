<?php
if(isset($_FILES['image']))
{
	echo '<pre>';
	//var_dump($_FILES);
	echo '</pre>';
	#move_uploaded_file(temp_name,dest);
	move_uploaded_file($_FILES['image']['tmp_name'],"server/".$_FILES['image']['name']);
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image"/></br></br>
<input type="submit" name="btn"/>
</form>