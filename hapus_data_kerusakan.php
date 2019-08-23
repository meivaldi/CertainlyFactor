<?php
	require_once "config/connection.php";
	$kode = $_POST['kode'];

	$sql = "DELETE FROM kerusakan WHERE kode_kerusakan = '$kode'";
	$query = $connect->query($sql);

	header("Location: data_kerusakan.php");

?>
