<!DOCTYPE html>
<html>
<head>
	<title>ADD LIST</title>
</head>
<body>
	<?php include '../display/add.html' ;?>
	<div class="tabel">
		<form method="post" action="add_process.php">
			<table>
				<tr><th>Name</th></tr>
				<tr><td><input type="text" name="name"></td></tr>
				<tr><td><input type="submit" value="ADD LIST"></td></tr>
			</table> 
		</form>
	</div>
</body>
</html>