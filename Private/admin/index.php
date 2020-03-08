<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<?php 

		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="error"){
				$pesan = "Anda tidak memiliki hak akses !";
				echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
		}

		session_start();
	 
		if($_SESSION['level']==""){
			header("location:index.php?pesan=error");
		} else if($_SESSION['level']=="petugas1"){
			header("location:../petugas/petugas 1/index.php?pesan=error");
		} else if($_SESSION['level']=="petugas2"){
			header("location:../petugas/petugas 2/index.php?pesan=error");
		} else if($_SESSION['level']=="petugas3"){
			header("location:../petugas/petugas 3/index.php?pesan=error");
		}
 
	?>
	
	<h1>Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<br><br>
	<a href="daftar_buku.php">Buku</a>
	<br><br>
	<a href="logout.php">LOGOUT</a>

</body>
</html>