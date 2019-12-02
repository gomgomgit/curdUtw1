<!DOCTYPE html>
<html>
<head>
	<title>ADD ITEM</title>
</head>
<body>
	<?php
		include '../connect/connect.php';
		include '../display/add.html';
		$id = $_GET['id'];
		$sql = "SELECT * FROM item where id =".$id;
		$resulto = mysqli_query($connect, $sql);
		$rowo = mysqli_fetch_assoc($resulto);
	?>
	<div class="tabel">
		<form method="post" action="edit_process.php">
			<input type="hidden" name="id" value="<?= $id ?>">
			<table>
				<tr>
					<th>Category</th>
					<td>
						<select name="category">
					<?php
						$sql = "SELECT * FROM category";
						$result = mysqli_query($connect, $sql);
						while ($row = mysqli_fetch_assoc($result)) { 
							if ($row['id'] == $rowo['category_id']) {
					?>
								<option value="<?= $row['id']; ?>" selected><?= $row['name']; ?></option>
					<?php
							} else {
					?>
								<option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
					<?php
							}
						}

					?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Name</th>
					<td><input type="text" name="name" value="<?= $rowo['name'] ?>"></td>
				</tr>
				<tr>
					<th>Price</th>
					<td><input type="number" name="price" value="<?= $rowo['price'] ?>"></td>
				</tr>
				<tr>
					<th>Status</th>
					<td>
						<label>
						<input type="radio" name="status" value="1" <?= ($rowo['status'])?"checked":"" ?>>
						Active</label>
						<label>
						<input type="radio" name="status" value="0" <?= ($rowo['status'])?"":"checked" ?>>
						Not Active</label>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="" value="EDIT ITEM"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html> 