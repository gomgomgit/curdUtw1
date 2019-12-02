<?php 
	$serv		= "localhost";
	$user		= "root";
	$pass		= 1234;
	$debe		= "point_of_sale";

	$connect = mysqli_connect($serv, $user, $pass, $debe);

	if ($connect == false) {
		die ("gagal menyambungkan :" . mysqli_connect_error());
	}

	$sql = 	"CREATE TABLE category (
			id INT PRIMARY KEY AUTO_INCREMENT,
			name VARCHAR(100)
			)";

	mysqli_query($connect, $sql);

	$sql =	"CREATE TABLE item (
			id INT PRIMARY KEY AUTO_INCREMENT,
			category_id INT,
			name VARCHAR(100),
			price INT,
			status BOOLEAN
			)";

	mysqli_query($connect, $sql);

	$sql =	"CREATE TABLE orderr (
			id INT PRIMARY KEY AUTO_INCREMENT,
			table_number VARCHAR(10),
			item_id INT,
			qty INT,
			total INT 
			)";

	mysqli_query($connect, $sql);

?>