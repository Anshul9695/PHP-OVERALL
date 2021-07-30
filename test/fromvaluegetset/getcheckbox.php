<?php

?>
<html>
<head></head>
<body>

<h1>Demo of Chechbox Tag</h1>
<form action="setcheckbox.php" method="post">
Name:<input type="text" name="name"></br></br>
<fieldset>
<legend>Select Hobbies:</legend>
<input type="checkbox" value="Singing" name="hobbies[]">Singing
<input type="checkbox" value="Dancing"name="hobbies[]">Dancing
<input type="checkbox" value="Coocking"name="hobbies[]">Coocking
<input type="checkbox" value="Plyaing"name="hobbies[]">Plyaing
</fieldset></br></br>
<input type="submit" value="submit" name="btn">
</form>
</body>
</html>