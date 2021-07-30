<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table id="main" border="0" cellspacing="0">
	<tr>
		<td>
			<h1>PHP with Ajax</h1>
		</td>
	</tr>
	<tr>
		<td id="table-load">
			<input type="button" id="load-button" value="Load Data">
		</td>
	</tr>
	<tr>
		<td id="table-data">
			<table border="1" width="100%" cellspacing="0" cellpadding="10">
				<tr>
					<th>Id</th>
					<th>Name</th>
				</tr>
				<tr>
					<td align="center">1</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
$("#load-button").on("click",function(e){
$.ajax({
url:"ajax-load.php",
type:"POST",
success:function(data)
{
	$("#table-data").html(data);
}
});
});
}) ;
</script>
</body>
</html>