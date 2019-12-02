<!DOCTYPE html>
<html>
<head>
	<title>ADD LIST</title>
</head>
<body>
	<?php
	 include '../connect/connect.php';
	 include '../display/add.html';
	 $id = $_GET['id'];
	 $sql = "SELECT * FROM category WHERE id =".$id;

	 $result = mysqli_query($connect, $sql);
	 $row = mysqli_fetch_assoc($result);
	?>
	<div class="tabel">
		<form method="post" action="edit_process.php">
			<input type="hidden" name="id" value="<?= $id ?>">
			<table>
				<tr><td>Name</td></tr>
				<tr><td><input type="text" name="name" value="<?= $row['name'] ?>"></td></tr>
				<tr><td><input type="submit" value="ADD LIST"></td></tr>
			</table>
		</form>
	</div>
</body>
</html>