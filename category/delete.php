<?php 
include '../connect/connect.php';
$id  = $_GET['id'];
$sql = "DELETE FROM category where id =".$id;
mysqli_query($connect, $sql);
$sqlit = "DELETE FROM item where category_id =".$id;
mysqli_query($connect, $sqlit);

header('location:index.php');

?>