<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Petugas 2</title>
	<link rel="stylesheet" href="../../../asset/css/petugas2(1).css">
</head>
<?php 

		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="error"){
  			$pesan = "Anda tidak memiliki hak akses !";
  			echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
		}

		session_start();
	 
		if($_SESSION['level']==""){
			header("location:../index.php?pesan=error");
		} else if($_SESSION['level']=="petugas1"){
			header("location:../petugas 1/index.php?pesan=error");
		} else if($_SESSION['level']=="petugas3"){
			header("location:../petugas 3/index.php?pesan=error");
		}
 
	?>

<body>
	<div class="bg"></div>
	<div class="opening">
		<h1>Hai Petugas <?php echo $_SESSION['datanama']; ?>!</h1>
		<h5>Welcome back to Skenary</h5>
	</div>
	<!-- header -->
	<div class="header">
		<table width="100%" class="tbheader">
			<tr>
				<td width="20%" >
				<h1 class="logo">Skenary</h1>
				</td>
				<td width="50%"></td>
				<td width="12.5%">
				<a href="#" class="active">Book Borrowed</a>
				</td>
				<td width="12.5%">
				<a href="#" class="nav">Book Borrow</a>
				</td>
				<td>
				<a href="../../logout.php" onclick="return confirm('Anda Yakin Ingin Keluar?')">
					<img src="../../../asset/img/menunav.jpg" class="menunav" alt="">
				</a>
				</td>
			</tr>
		</table>
  	</div>
  <!-- header -->
	<div class="box">
		<h3>Student Information</h3>
		<p>12 January 2020</p>
		<h5>Fill The Box</h5>
		<form action="">
			<input type="text" placeholder="NIS" name="" required><br>
			<input type="text" placeholder="Book Code" name="" required><br>
			<input type="text" placeholder="Book Name" name="" required><br>
			<button type="submit">Enter</button>
		</form>
	</div>
</body>
</html>