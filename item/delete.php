<?php 
include '../connect/connect.php';
$id  = $_GET['id'];
$sql = "DELETE FROM item where id =".$id;

mysqli_query($connect, $sql);
header('location:index.php');

?>