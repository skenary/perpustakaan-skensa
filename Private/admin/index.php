<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="../../asset/css/admin.css">
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
	
	<div class="head">
		<div class="logo">
			<h1>Skenary</h1>
			<p >Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
		</div>
		<div class="navbar">
			<ul>
				<li><a href="../logout.php">Logout</a></li>
				<li><a href="#">Laporan</a></li>
				<li><a href="#">View</a>
					<ul>
						<li><a href="view/databuku.php">Data Buku</a></li>
						<li><a href="view/datasiswa.php">Data Siswa</a></li>
						<li><a href="view/peminjaman-buku.php">Peminjaman Buku</a></li>
						<li><a href="view/pengembalian-buku">Pengembalian Buku</a></li>
					</ul>	
				</li>
				<li><a href="index.php">Home</a></li>
			</ul>
		</div>
	</div>
	<div class="body">			
			<h1>WEBSITE PERPUSTAKAAN SKENSA</h1>
	</div>
	<div class="footer">
		<br>
		<h5>&copy;Copyright 2020</h5>
	</div>

</body>
</html>