<?php
	require_once "config/connection.php";

	$kode = $_POST['kodeAturan'];
	$kerusakan = $_POST['kerusakan'];
	$gejala = $_POST['gejala'];

	for ($i = 0; $i < count($gejala); $i++) {
		$sql = "INSERT INTO aturan(kode_aturan, kode_kerusakan, kode_gejala) VALUES('$kode', '$kerusakan', '$gejala[$i]')";
		$query = $connect->query($sql);
	}

	header("Location: data_aturan.php");
?>