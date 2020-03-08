<!DOCTYPE html>
<html>
<head>
  <title>Skenary</title>
  <link rel="stylesheet" type="text/css" href="../../../assets/css/petugas1.css">
  <script src="../../../assets/js/petugas1.js"></script>
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
		} else if($_SESSION['level']=="petugas2"){
			header("location:../petugas 2/index.php?pesan=error");
		} else if($_SESSION['level']=="petugas3"){
			header("location:../petugas 3/index.php?pesan=error");
		}
 
	?>

<body>
  <center>
    <div class="img">
      <div class="text">
        <h1>Hai Petugas X!</h1>
        <br>
        <p>Welcome Back To Skenary</p>
      </div>
    </div>
  </center>
  <div class="header">
    <header id="skenary">Skenary</header>
      <div class="ul-li">
        <a id="addb" class="nowtamp" onclick="balik()"  href="#skenary">Add Book</a>
        <a id="addv" onclick="pindah()" href="#skenary">View Book</a>
      </div>
  </div>
<div id="semuanya" class="semuanya">
  <div class="add_book">
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
      <center>
        <div class="box1">
          <center>
            <h1>Book Description</h1>
          </center>
          <div class="flex">
            <div class="box2">
              <p>Fill The Box</p>
              <div class="form" onclick="myFunction()">
                <input type="text" name="nama_buku" required="" autocomplete="off">
                <label for="name" class="label-name">
                    <span class="content-name">Book Name</span>
                </label>
              </div>          
              <div class="form2">
                <input type="text" name="tipe_buku" required="" autocomplete="off">
                <label for="name" class="label-name2">
                    <span class="content-name2">Book Type</span>
                </label>
              </div>
              <div class="form3">
                <input type="text" name="kode_buku" required="" autocomplete="off">
                <label for="name" class="label-name3">
                    <span class="content-name3">Book Code</span>
                </label>
              </div>
                <input type="submit" class="tes" name="submit">
            </div>
            <div class="apakek">
              <input type="file" id="file" name="gambar" disabled="disabled" onchange="return fileValidation()">
            </div>
            <div id="imagePreview"></div>
          </div>
        </div>
      </center>
    </form>
  </div>
</div>
<br><br><br><br><br>
</body>
</html>



<div id="view_book" class="hidden">
  <p>ini untuk view ya!!!</p>
</div>



<div id="add_book" class="hidden">
  <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
    <center>
      <div class="box1">
        <center>
          <h1>Book Description</h1>
        </center>
        <div class="flex">
          <div class="box2">
            <p>Fill The Box</p>
            <div class="form" onclick="myFunction()">
              <input type="text" name="nama_buku" required="" autocomplete="off">
              <label for="name" class="label-name">
                  <span class="content-name">Book Name</span>
              </label>
            </div>          
            <div class="form2">
              <input type="text" name="tipe_buku" required="" autocomplete="off">
              <label for="name" class="label-name2">
                  <span class="content-name2">Book Type</span>
              </label>
            </div>
            <div class="form3">
              <input type="text" name="kode_buku" required="" autocomplete="off">
              <label for="name" class="label-name3">
                  <span class="content-name3">Book Code</span>
              </label>
            </div>
              <input type="submit" class="tes" name="submit">
          </div>
          <div class="apakek">
            <input type="file" id="file" name="gambar" disabled="disabled" onchange="return fileValidation()">
          </div>
          <div id="imagePreview"></div>
        </div>
      </div>
    </center>
  </form>
</div>
