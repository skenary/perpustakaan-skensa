<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data Siswa</title>
	<link rel="stylesheet" type="text/css" href="../../../asset/css/admin.css">
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
		<h1>Skenary</h1>
		<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
		<div class="navbar">
			<ul>
				<li><a href="../../logout.php">Logout</a></li>
				<li><a href="#">Laporan</a></li>
				<li><a href="#">View</a>
					<ul>
						<li><a href="databuku.php">Data Buku</a></li>
						<li><a href="datasiswa.php">Data Siswa</a></li>
						<li><a href="peminjaman-buku.php">Peminjaman Buku</a></li>
						<li><a href="pengembalian-buku.php">Pengembalian Buku</a></li>
					</ul>	
				</li>
				<li><a href="../index.php">Home</a></li>
			</ul>
		</div>
	</div>
	<div class="body">	
			<h3>Data Siswa</h3>
			<center>
				<table border="1" callpadding="5" cellspasing="2">
					<tr>
						<td>No</td>
						<td>NIS</td>
						<td>Nama Siswa</td>
						<td>Kelas Siswa</td>
						<td>Jurusan Siswa</td>
						<td>Aksi</td>
					</tr>
				</table>
			</center>
		</div>
	</div>
	<div class="footer">
		<br>
		<h5>&copy;Copyright 2020</h5>
	</div>

</body>
</html>