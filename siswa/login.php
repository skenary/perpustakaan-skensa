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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<div class="col-lg">
				<P><?php 
					while($data=mysqli_fetch_array($hasil)){
					 ?>
					 <h2><?php echo $data['nama_siswa']; ?></h2>
					<?php } ?>
				</P>
			</div>	
		</div>
	</div>
</body>
</html>