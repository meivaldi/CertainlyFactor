<?php
	require_once "config/connection.php";
	
	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$kerusakan = $_POST['kerusakan'];
	$gejala = $_POST['gejala'];

	$sql = "UPDATE aturan SET kode_aturan='$kode', kode_kerusakan='$kerusakan', kode_gejala='$gejala' WHERE id='$id'";
	$query = $connect->query($sql);

	if ($connect->errno) {
		echo "Error";
	} else {
		header("Location: data_aturan.php");
	}

?>