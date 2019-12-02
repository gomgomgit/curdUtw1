<!DOCTYPE html>
<html>
<head>
	<title>ITEMS</title>
</head>
<body>
	<div><h1>ITEM</h1></div>
	<div class="index">
		<?php include '../display/menu.html'; ?>
		<div class="tabel">
			<table>
				<tr>
					<th>No</th>
					<th>Category</th>
					<th>Name</th>
					<th>Price</th>
					<th>Submit</th>
					<th>Action</th>
				</tr>

			<?php  
				include '../connect/connect.php';

				function cate($id, $connect) {
					$sql = "SELECT name FROM category WHERE id =".$id;
					$result = mysqli_query($connect, $sql);
					$row = mysqli_fetch_assoc($result);
					
						return ($row['name']);
					
				}

				$no = 1;
				$sql = "SELECT * FROM item";
				$result = mysqli_query($connect, $sql);

				if (mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= cate($row['category_id'], $connect) ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['price'] ?></td>
					<td>
					<?php if ($row['status']) {
						echo "Active";
					} else { echo "Not Active"; }
					?></td>
					<td><a href="edit.php?id=<?= $row['id'] ?>">Edit</a> | <a href="delete.php?id=<?= $row['id'] ?>">Delete</a></td>
				</tr>

			<?php
					}
				}


			?>	
				<tr>
					<td>
						<div class="add">
						<a href="add.php">ADD ITEM</a>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>