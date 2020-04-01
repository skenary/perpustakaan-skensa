


<?php 

	include_once("../config/config.php");

		if (isset($_POST['btn_login'])) {
		$nis 	= $_POST['nis'];

		$queryGet = "SELECT * FROM tb_siswa WHERE nis_siswa = '$nis'";
		$exQuery = mysqli_query($conn, $queryGet);

		if (mysqli_num_rows($exQuery) != 0) {
			$dataLogin = mysqli_fetch_assoc($exQuery);
			$db_nis = $dataLogin['nis_siswa'];

			if ($nis == $db_nis) {
				header('location:buku/index2.php');
			}
			else{
				?>
				<script>
					alert('nis Salah');
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