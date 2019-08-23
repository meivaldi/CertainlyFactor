<?php
	require_once "config/connection.php";
	$id = $_POST['id'];

	$sql = "DELETE FROM aturan WHERE id = '$id'";
	$query = $connect->query($sql);

	if ($connect->errno) {
		echo "Error";
	} else {
		header("Location: data_aturan.php");
	}

?>
