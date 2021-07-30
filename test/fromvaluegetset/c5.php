<?php
?>
<html>
<head></head>
<body>
<form action="c6.php" method="post">
Name:<input type="text" name="name"/></br></br>
<?php $hobbies_arr=['playing','singing','crying'];?>
<?php foreach($hobbies_arr as $index=>$value){?>
<input type="checkbox" value="<?php echo $value;?>" name="hobbies[]"><?php echo $value;?>

<?php } ?>
<input type="submit" value="submit" name="btn" />
</form>
</body>
</html>