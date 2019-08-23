<?php
	require_once "config/connection.php";
	
	$nama = $_POST['nama'];
	$kode = $_POST['kode'];
	$nilai = $_POST['nilai'];

	$sql = "INSERT INTO gejala(kode_gejala, nama_gejala, nilai_gejala) VALUES('$kode', '$nama', '$nilai')";
	$query = $connect->query($sql);

	if ($query) {
		echo "ok";
	} else {
		echo "gagal";
	}

	$connect->close();
?>