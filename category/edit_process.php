<?php 
include '../connect/connect.php';
$id   = $_POST['id'];
$name = $_POST['name'];

$sql  = "UPDATE category SET name = '$name' WHERE id = '$id'";

mysqli_query($connect, $sql);
header('location:index.php');
?>