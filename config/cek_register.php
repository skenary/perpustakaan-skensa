<?php

	include "koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$level = $_POST['level'];

	$query = "INSERT INTO tb_user (email, username, password, level) VALUE ('$email', '$username', '$password', '$level') ";

	$hasil = mysqli_query($conn, $query);

	if($hasil) {
		header('Location:../private/index.php');
	} else {
		echo "input data gagal";
	}

?>