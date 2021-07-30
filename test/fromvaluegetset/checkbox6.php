<?php
$name=$_POST['name'];
echo $name;
$hobbies=$_POST['hobbies'];
$hobby=implode(",",$hobbies);
//from database
$hobbies_arr=explode(",",$hobby);
#explode function is used to convert string to array in_array return true or false if particular value
#is inside array or not
?>

<html>
<head></head>
<body>

<h1>Set of Chechbox Tag</h1>
<form action="setcheckbox.php" method="post">
Name:<input type="text" name="name" value="<?php echo $name;?>"></br></br>
<fieldset>
<legend>Select Hobbies:</legend>
<?php
$hobbies_arr_new=['Singing','Dancing','Coocking','Playing'];

?>
<?php

foreach($hobbies_arr_new as $index =>$value){ ?>
	<input type="checkbox" value="<?php echo $value;?>" name="hobbies[]"
	<?php (in_array($value,$hobbies_arr))?print('checked'):"";?>>
	<?php echo $value;?>
<?php } ?>

</fieldset></br></br>
<input type="submit" value="submit" name="btn">
</form>
</body>
</html>