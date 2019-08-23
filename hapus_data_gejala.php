<?php
	require_once "config/connection.php";
	$kode = $_POST['kode'];

	$sql = "DELETE FROM gejala WHERE kode_gejala = '$kode'";
	$query = $connect->query($sql);

	header("Location: data_gejala.php");

?>
