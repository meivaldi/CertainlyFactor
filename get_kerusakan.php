<?php

	require_once "config/connection.php";

	$kode = $_POST['kode'];

	$sql = "SELECT nama_kerusakan, solusi FROM kerusakan WHERE kode_kerusakan='$kode'";
	$query = $connect->query($sql);
	$result = $query->fetch_array();

	$response = array();

	if ($connect->errno) {
		$response['error'] = TRUE;
	} else {

		$sql = "SELECT gejala.nama_gejala FROM aturan INNER JOIN kerusakan ON aturan.kode_kerusakan=kerusakan.kode_kerusakan INNER JOIN gejala ON aturan.kode_gejala = gejala.kode_gejala WHERE kerusakan.kode_kerusakan='$kode'";
		$query = $connect->query($sql);

		if ($connect->errno) {
			$response['error'] = TRUE;
		} else {
			$gejala = array();

			$i = 0;
			while ($row = $query->fetch_array()) {
				$gejala[$i] = $row['nama_gejala'];
				$i++;
			}

			$response['error'] = FALSE;
			$response['nama_kerusakan'] = $result['nama_kerusakan'];
			$response['gejala'] = $gejala;
			$response['solusi'] = $result['solusi'];
		}
	}
	
	$connect->close();

	echo json_encode($response);

?>