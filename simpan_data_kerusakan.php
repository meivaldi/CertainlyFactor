<?php
	require_once "config/connection.php";
	
	$nama = $_POST['nama'];
	$kode = $_POST['kode'];
	$solusi = $_POST['solusi'];

	$sql = "INSERT INTO kerusakan(kode_kerusakan, nama_kerusakan, solusi) VALUES('$kode', '$nama', '$solusi')";
	$query = $connect->query($sql);

	if ($query) {
		echo "ok";
	} else {
		echo "gagal";
	}

	$connect->close();
?>