<?php

?>
<html>
<head></head>
<body>

<h1>Demo of Chechbox Tag</h1>
<form action="checkbox6.php" method="post">
Name:<input type="text" name="name"></br></br>
<fieldset>
<legend>Select Hobbies:</legend>
<?php $hobbies_arr=['Singing','Dancing','Coocking','Playing'];?>
<?php foreach($hobbies_arr as $index=>$value){ ?>
<input type="checkbox" value="<?php echo $value;?>"name="hobbies[]"/><?php echo $value;?>
<?php } ?>
</fieldset></br></br>
<input type="submit" value="submit" name="btn">
</form>
</body>
</html>