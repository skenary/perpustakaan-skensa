<!DOCTYPE html>
<html>
<head>
	<title>Skenary</title>
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
			header("location:../petugas 1/index.php?pesan=error");
		} else if($_SESSION['level']=="petugas2"){
			header("location:../petugas 2/index.php?pesan=error");
		}
 
	?>

	<h1>Halaman Pegawai 3</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
</body>
</html>