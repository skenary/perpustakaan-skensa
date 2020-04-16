<?php

    include "../../../config/koneksi.php";

    $nama_buku = $_POST['nama_buku'];
    $tipe_buku = $_POST['tipe_buku'];
    $kode_buku = $_POST['kode_buku'];
    $gambar = $_FILES['gambar']['name'];

	$target_dir = "../../../asset/img/";
	$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["gambar"]["size"] > 5000000000000000000000000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
	        $query = "INSERT INTO tb_buku (nama_buku, tipe_buku, kode_buku, gambar)
                    VALUES ('$nama_buku', '$tipe_buku', '$kode_buku','$gambar')";
            $hasil = mysqli_query($conn, $query); 
            if($hasil) {
                header('Location:index.php');
            }
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

?>
