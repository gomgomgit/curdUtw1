<?php 
include '../connect/connect.php';

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

$sqlin = "INSERT INTO orderr (table_number, item_id, qty, total) VALUES ('$table', $item, $qty, $total)";
mysqli_query ($connect, $sqlin);
header('location:index.php');

?>