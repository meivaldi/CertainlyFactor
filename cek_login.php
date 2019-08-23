<?php

	require_once "config/connection.php";
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$query = $connect->query($sql);
	$hasil= $query->fetch_array();

	$user = $hasil['username'];
	$pass = $hasil['password'];

	$response = array();
	$response['username_before'] = $username;
	$response['password_before'] = $password;
	$response['username'] = $user;
	$response['password'] = $pass;

	if ($user == $username && $pass = $password) {
		session_start();
      	$_SESSION['username']= $user;
      	$_SESSION['name'] = $hasil['nama'];
      	$_SESSION['level'] = $hasil['jabatan'];
      	$response['name'] = $hasil['nama'];
      	$response['username'] = $hasil['username'];
      	$response['level'] = $hasil['jabatan'];
      	$response['status'] = TRUE;
	} else {
		session_start();
    	$_SESSION['act']="error";
    	$response['status'] = FALSE;
	}

	$connect->close();

	echo json_encode($response);
?>