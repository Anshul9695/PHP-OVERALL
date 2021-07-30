<?php

?>
<html>
<head></head>
<body>

<h1>Demo of Select Tag</h1>
<form action="select-set2.php" method="post">
<p>
Select City:
<select name="city">
<option value="">--select City--</option>
<?php $city_arr=['Banda','Lucknow','Kanpur'];?>
<?php foreach($city_arr as $index=>$value){?>
<option value="<?php echo $value;?>">
<?php echo $value;?>
</option>
<?php }?>
</select>
<input type="submit" name="btn" value="Edit"/>
</p>
</form>
</body>
</html>