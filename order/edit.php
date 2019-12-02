<!DOCTYPE html>
<html>
<head>
	<title>ADD ORDER</title>
</head>
<body>
	<?php
	include '../connect/connect.php';
	include '../display/add.html';
	$id = $_GET['id'];
	$sql = "SELECT * FROM orderr where id=".$id;
	$result = mysqli_query($connect, $sql);
	$rowin = mysqli_fetch_assoc($result);
	?>
	<form method="POST" action="edit_process.php">
		<input type="hidden" name="id" value="<?= $id ?>">
		<table>
			<tr>
				<th>Table Number</th>
				<td><input type="text" name="table" value="<?= $rowin['table_number'] ?>"></td>
			</tr>
			<tr>
				<th>Item</th>
				<td>
					<select name="item">
		<?php
					$sql = "SELECT * FROM item where status = 1";
					$result = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_assoc($result)) { 
						if ($row['id'] == $rowin['item_id']) {
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
				<th>Qty</th>
				<td><input type="number" name="qty" value="<?= $rowin['qty'] ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="EDIT ORDER"></td>
			</tr>
		</table>
	</form>
</body>
</html>