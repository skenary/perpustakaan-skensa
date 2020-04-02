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
		<h1>Skenary</h1>
		<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
		<div class="navbar">
			<ul>
				<li><a href="#">Laporan</a></li>
				<li><a href="#">Kegiatan</a></li>	
				<li><a href="#dropdown-child" class="mainmenubtn">Petugas</a>
					<ul>
						<li><a href="../petugas/petugas1">Petugas 1</a></li>
						<li><a href="../petugas/petugas1">Petugas 2</a></li>
						<li><a href="../petugas/petugas1">Petugas 3</a></li>
					</ul>	
				</li>
				<li><a href="#">Home</a></li>
			</ul>
		</div>
	</div>
	<br><br>
	<div class="body">
		<a href="daftar_buku.php">Buku</a>
		<br><br>
		<a href="../logout.php">LOGOUT</a>
	</div>
	<div class="footer">

	</div>

</body>
</html>