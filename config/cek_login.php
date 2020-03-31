<?php 

	session_start();
	 
	include 'koneksi.php';
	session_start();
	$_SESSION['datanama'] = $_POST['username'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$login = mysqli_query($conn,"SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['level']=="admin"){
	 
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:../private/admin/index.php");
	 
		}else if($data['level']=="petugas1"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas1";
			header("location:../private/petugas/petugas 1/index.php");
	 
		}else if($data['level']=="petugas2"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas2";
			header("location:../private/petugas/petugas 2/index.php");

		}else if($data['level']=="petugas3"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas3";
			header("location:../private/petugas/petugas 3/index.php");
	 
		}else{
			header("location:index.php?pesan=gagal");
		}

	}else{
		header("location:index.php?pesan=gagal");
	}
 
?>