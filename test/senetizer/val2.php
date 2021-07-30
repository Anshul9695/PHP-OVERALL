<?php
$title=strip_tags($_POST['title']);//remove tags
$content=$_POST['content'];
echo "<h1>".htmlentities(trim($title))."</h1>";// remove entities
echo htmlspecialchars($content);
?>