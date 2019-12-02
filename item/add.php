<!DOCTYPE html>
<html>
<head>
	<title>ADD ITEM</title>
</head>
<body>
	<?php include '../display/add.html'; ?>
	<div class="tabel">
		<form method="post" action="add_process.php">
			<table>
				<tr>
					<th>Category</th>
					<td>
						<select name="category">
					<?php
						include '../connect/connect.php';
						$sql = "SELECT * FROM category";
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
					<th>Name</th>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<th>Price</th>
					<td><input type="number" name="price"></td>
				</tr>
				<tr>
					<th>Status</th>
					<td>
						<label>
						<input type="radio" name="status" value="1">
						Active</label>
						<label>
						<input type="radio" name="status" value="0">
						Not Active</label>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="" value="ADD ITEM"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>