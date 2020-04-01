<?php 
	
	session_start();
	$datanama = $_SESSION["nis"];
 ?>
 <?php 
 	include_once('config/config.php');
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
		Login
	</title>
	<link rel="stylesheet" type="text/css" href="css/style2.cssw">
</head>
<body>
	<div class="wrapper">
		<div class="kiri">
			
		</div>
		<div class="kanan">
			
		</div>
		<div class="form">
			<div class="kanan1">	
				<P><?php 
		while($data=mysqli_fetch_array($hasil)){
	 ?>
	 <h2><?php echo $data['nama_siswa']; ?></h2>
	<?php } ?></P>			
			</div>
			<div class="kiri1">	

			</div>
		</div>		
	</div>
</body>
</html>