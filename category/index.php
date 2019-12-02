<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
</head>
<body>
	<div><h1>CATEGORY</h1></div>
	<div class="index">
		<?php include '../display/menu.html'; ?>
		<div class="tabel">
			<table>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
				</tr>

			<?php  
				include '../connect/connect.php';
				$no = 1;
				$sql = "SELECT * FROM category";
				$result =  mysqli_query($connect, $sql);

				if (mysqli_num_rows($result)>0) {
					while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= $row['name'] ?></td>
					<td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | <a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
				</tr>

			<?php
					}
				}


			?>
			<tr>
				<td>
					<div class="add"><a href="add.php">ADD LIST</a>
					</div>
				</td>
			</tr>
			</table>
		</div>
	</div>
</body>
</html>