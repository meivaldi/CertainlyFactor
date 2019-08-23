<?php
	require_once "config/connection.php";

	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$solusi = $_POST['solusi'];

	$sql = "UPDATE kerusakan SET kode_kerusakan='$kode', nama_kerusakan='$nama', solusi='$solusi' WHERE kode_kerusakan='$kode'";
	$query = $connect->query($sql);

	if ($connect->errno) {
		echo "Error";
	} else {
		header("Location: data_kerusakan.php");
	}

?>