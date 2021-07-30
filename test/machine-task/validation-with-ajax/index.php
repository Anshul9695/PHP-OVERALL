
<!DOCTYPE html>
<html>
<head>
	<title>::Validation with Ajax</title>
</head>
<body>
<h1>Validation with Ajax</h1>
<hr/>

<form action="<?php echo basename($_SERVER['PHP_SELF']);?>" method="post">
	<p>Enter mobile Number:
		<input type="text" id="mobile"><span id="mobile_error"></span>
	</p>
</form>
</body>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	var base_url="http://localhost:8000/test/machine-task/validation-with-ajax/";
	$(document).ready(function(){
$("#mobile").on("keyup",function(){
//console.log($("#mobile").val());

var mobileno=$("#mobile").val();
$.ajax({
url:base_url+"ajax-validation/validation-mobile.php";


});

});
	});
</script>
</html>

