<?php 
	
	session_start();
	$datanama = $_SESSION["nis"];
?>
 <?php 
 	include_once('../config/config.php');
 	$query = "SELECT * FROM tb_siswa WHERE nis_siswa ='$datanama'";
 	$hasil = mysqli_query($conn,$query);

 	if(!$hasil){
 		echo "failed";
 	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		login
	</title>
	<link rel="stylesheet" type="text/css" href="../asset/css/siswa2_style.css">
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
									<div class="name">
										<P>Hi,<?php 
											while($data=mysqli_fetch_array($hasil)){
					 						?>
					 						<h2><?php echo $data['nama_siswa']; ?></h2>
											<?php } ?><br>
											Welcome to Skenary !
										</P>	
									</div>			
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
</body>
</html>
