<?php
	
	$conn = mysqli_connect("localhost","root","","db_perpustakaan");

	if(!$conn){
		echo "Koneksi Gagal!";
	}

?>