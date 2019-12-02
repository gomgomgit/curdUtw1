<!DOCTYPE html>
<html>
<head>
	<title>ORDER</title>
</head>
<body>
	<div><h1>ORDER</h1></div>
	<div class="index">
	<?php include '../display/menu.html'; ?>
		<div class="tabel">
			<table>
				<tr>
					<th>No</th>
					<th>Table Number</th>
					<th>Item</th>
					<th>Qty</th>
					<th>Total</th>
					<th>Discount</th>
					<th>After Discount</th>
					<th>Action</th>
				</tr>
			<?php
			include '../connect/connect.php';

			function item($id, $connect) {
				$sql = "SELECT name FROM item where id =".$id;
				$result = mysqli_query($connect, $sql);
				$row = mysqli_fetch_assoc($result);
				return($row['name']);
			}
			function total($id, $qty, $connect) {
				$sql = "SELECT price FROM item where id =".$id;
				$result = mysqli_query($connect, $sql);
				$row = mysqli_fetch_assoc($result);
				$total = $row['price'] * $qty;
				return($total);
			}

			$no = 1;
			$sql = "SELECT * FROM orderr";
			$result = mysqli_query($connect, $sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $row['table_number'] ?></td>
					<td><?= item($row['item_id'], $connect) ?></td>
					<td><?= $row['qty'] ?></td>
					<td><?= $total = total($row['item_id'], $row['qty'], $connect) ?></td>
					<td><?= ($total >100000)?"20%": "-"; ?></td>
					<td><?= $row['total'] ?></td>
					<td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | <a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
				</tr>


			<?php
				}
			}

			?>
			<tr>
				<td>
					<div class="add">
					<a href="add.php">ADD ORDER</a>
					</div>
				</td>
			</tr>
			</table>
		</div>
	</div>
</body>
</html>