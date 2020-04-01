<!DOCTYPE html>
<html>
<head>
	<title>login2</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
		<div class="wrapper">
			<div class="kiri">
			
			</div>
			<div class="kanan">
			
			</div>
			<div class="form">
					<div class="kanan1">	
						<h1 class="title">
							Login Account
						</h1>
						<h3 class="subtit">Welcome to Skenary </h3>
						<div class="isi">
							<form action="" method="post">
								<ul>
									<li>
										<input type="text" name="nis" placeholder="Nomor Induk Siswa" required="required" autocomplete="">
									</li>
								</ul>
								<button type="submit" name="btn_login" >Log In</button>
							</form>			
						</div>
					</div>
					<div class="kiri1">	
						
					</div>
			</div>		
	</div>
</body>
</html>

<?php 
	include_once("config/config.php");

		if (isset($_POST['btn_login'])) {
		$nis = $_POST['nis'];

		$queryGet = "SELECT * FROM tb_siswa WHERE nis_siswa = '$nis'";
		$exQuery = mysqli_query($conn, $queryGet);

		if (isset($_POST['btn_login'])) {
		$nis = $_POST['nis'];
		session_start();
		$_SESSION["nis"] = $nis;
		}

		if (mysqli_num_rows($exQuery) != 0) {
			$dataLogin = mysqli_fetch_assoc($exQuery);
			$db_nis = $dataLogin['nis_siswa'];

			if ($password == $db_password) {
				header('location:index2.php');
			}
			else{
				?>
				<script>
					alert('Username/Password Salah');
					location.href = 'index.php';
				</script>
				<?php
			}
		}
		else{
			?>
			<script>
					alert('Username/Password Salah');
					location.href = 'index.php';
				</script>
			<?php
		}
	}

 ?>
