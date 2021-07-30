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
<input type="checkbox" value="Singing" name="hobbies[]"
<?php
if(in_array("Singing",$hobbies_arr))
{
	echo "checked";
}

?>

>Singing
<input type="checkbox" value="Dancing"name="hobbies[]"
<?php
if(in_array("Dancing",$hobbies_arr))
{
	echo "checked";
}

?>

>Dancing
<input type="checkbox" value="Coocking"name="hobbies[]"

<?php
if(in_array("Coocking",$hobbies_arr))
{
	echo "checked";
}

?>
>Coocking
<input type="checkbox" value="Plyaing"name="hobbies[]"

<?php
if(in_array("Plyaing",$hobbies_arr))
{
	echo "checked";
}

?>
>Plyaing
</fieldset></br></br>
<input type="submit" value="submit" name="btn">
</form>
</body>
</html>