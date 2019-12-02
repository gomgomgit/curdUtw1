<?php 
include '../connect/connect.php';

$id 		= $_POST['id'];
$category 	= $_POST['category'];
$name		= $_POST['name'];
$price		= $_POST['price'];
$status		= $_POST['status'];

$sql = "UPDATE item SET category_id = $category, name = '$name', price = $price, status = $status WHERE id = $id";
mysqli_query($connect, $sql);
header('location:index.php');


?>