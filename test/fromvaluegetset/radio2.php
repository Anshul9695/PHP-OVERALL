<?php
$gender=$_POST['gender'];
echo $gender;
?>
<html>
<head></head>
<body>

<h1>Demo of Radio Tag</h1>
<form action="radio2.php" method="post">
<p>
Select Gender:
<input type="radio" name="gender" value="Male"<?php if($gender=="Male"){echo "checked";}?>/>Male
<input type="radio" name="gender" value="female"<?php if($gender=="female"){echo "checked";}?>/>Female
<input type="radio" name="gender" value="Other"<?php if($gender=="Other"){echo "checked";}?>/>Other
<input type="submit" name="btn" value="Edit"/>
</p>
</form>
</body>
</html>