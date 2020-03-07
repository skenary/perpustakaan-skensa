<?php 

	session_start();
	 
	include 'koneksi.php';
	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$login = mysqli_query($conn,"select * from tb_user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);
	 
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		if($data['level']=="admin"){
	 
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:../admin/halaman_admin.php");
	 
		}else if($data['level']=="petugas1"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas1";
			header("location:../petugas/petugas 1/index.php");
	 
		}else if($data['level']=="petugas2"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas2";
			header("location:../petugas/petugas 2/index.php");

		}else if($data['level']=="petugas3"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas3";
			header("location:../petugas/petugas 3/index.php");
	 
		}else{
			header("location:index.php?pesan=gagal");
		}

	}else{
		header("location:index.php?pesan=gagal");
	}
 
?>