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
<form action="c6.php" method="post">
Name:<input type="text" name="name"/></br></br>
<?php $hobbies_new_arr=['playing','singing','crying'];?>

<?php foreach($hobbies_new_arr as $index=>$value){?>
<input type="checkbox" value="<?php echo $value;?>" name="hobbies[]"
<?php (in_array($value,$hobbies_arr))?print('checked'):"";?>>
<?php echo $value;?>

<?php } ?>
<input type="submit" value="submit" name="btn" />
</form>
</body>
</html>