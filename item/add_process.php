<?php 
	include '../connect/connect.php';

	$category 	= $_POST['category'];
	$name		= $_POST['name'];
	$price		= $_POST['price'];
	$status		= $_POST['status'];

	$sql = "INSERT INTO item (category_id, name, price, status) VALUES ($category, '$name', $price, $status) ";
	mysqli_query($connect,$sql);
	header('location:index.php');

?>