<?php 
include '../connect/connect.php';

$id = $_POST['id'];
$table = $_POST['table'];
$item = $_POST['item'];
$qty = $_POST['qty'];

$sql = "SELECT price FROM item WHERE id =".$item;
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$tot = $row['price'] * $qty;
if ($tot > 100000) {
	$total = $tot - ($tot * 20 / 100);
} else {
	$total = $tot;
}

$sqlin = "UPDATE orderr SET table_number = '$table', item_id = $item, qty = $qty, total = $total WHERE id='$id'";
mysqli_query($connect, $sqlin);
header('location:index.php');

?>