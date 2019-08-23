<?php
	require_once "config/connection.php";

	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$nilai = $_POST['nilai'];

	$sql = "UPDATE gejala SET kode_gejala='$kode', nama_gejala='$nama', nilai_gejala='$nilai' WHERE kode_gejala='$kode'";
	$query = $connect->query($sql);

	if ($connect->errno) {
		echo "Error";
	} else {
		header("Location: data_gejala.php");
	}

?>