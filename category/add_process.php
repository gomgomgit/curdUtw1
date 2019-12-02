<?php 
include '../connect/connect.php';
$name = $_POST['name'];

$sql  = "INSERT INTO category (name) VALUES ('$name')";

mysqli_query($connect, $sql);

header("location:index.php");
 ?>