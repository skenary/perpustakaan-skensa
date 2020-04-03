<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/siswa_style.css">
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="back">
					<div class="col-lg-3">
						
					</div>
					<div class="col-lg-6">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="form">
								<h1>Skenary</h1>
								<div class="isi">
									<form action="" method="post">
										<ul>
											<li>
												<input type="text" name="nis" placeholder="Nomor Induk Siswa" required="required" autocomplete="">
											</li>
										</ul>
										<button class="btnab" type="submit" name="btn_login" >Absen</button>
									</form>			
								</div>	
								<p>Note : Nicola Tesla menemukan listrik AC dan disaat <br> yang bersamaan Galilei menemukan listrik DC</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						
					</div>
				</div>
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
				header('location:siswa/login.php');
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