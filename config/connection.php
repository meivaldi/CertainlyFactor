<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "dokter_komputer";

	$connect = new MySQLi($host,$user,$pass,$dbname);
	if ($connect->connect_errno) { die("ERROR : -> ".$connect->connect_error); }

?>