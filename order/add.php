<!DOCTYPE html>
<html>
<head>
	<title>ADD ORDER</title>
</head>
<body>
	<?php include '../display/add.html'; ?>
	<form method="POST" action="add_process.php">
		<table>
			<tr>
				<th>Table Number</th>
				<td><input type="text" name="table"></td>
			</tr>
			<tr>
				<th>Item</th>
				<td>
					<select name="item">
		<?php
					include '../connect/connect.php';
					$sql = "SELECT * FROM item where status = 1";
					$result = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_assoc($result)) { 
		?>
					<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>

		<?php
					}

		?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Qty</th>
				<td><input type="number" name="qty"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="ADD ORDER"></td>
			</tr>
		</table>
	</form>
</body>
</html>