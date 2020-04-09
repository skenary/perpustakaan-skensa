<!DOCTYPE html>
<html>
<head>
  <title>Skenary</title>
  <link rel="stylesheet" type="text/css" href="../../../asset/css/petugas1.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="../../../asset/js/petugas1.js"></script>
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
      <div class="fa"><a href="../../logout.php"><i class="fas fa-sign-out-alt fa-3x"></i></a></div>
      <div class="text">
        <img src=" ../../../asset/img/logo2.png">
        <h1>Hai Petugas <?php echo  $_SESSION['datanama'] ?>!</h1>
        <br>
        <p>Welcome Back To Skenary</p>
      </div>
    </div>
  </center>
  <div id="header" class="header">
    <header id="skenary" class="skenary">Skenary</header>
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
              <div class="form">
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
                
            </div>

            <div class="apakek">
              <input type="file" id="file" name="gambar" onchange="return fileValidation()" required="">
            </div>
            <div id="imagePreview"></div>
          </div>
          <input type="submit" class="tes" value="Submit" name="submit">
        </div>
      </center>
    </form>
  </div>
</div>
<br><br><br><br><br>
</body>
</html>
<?php
  include ('../../../config/koneksi.php'); 
  $q = "SELECT * FROM tb_buku";
  $v = mysqli_query($conn,$q);

 ?>
<div id="view_book" class="hidden">
  <div class="builder">
    <?php while ($d = mysqli_fetch_array($v)) {
     ?>
    <div class="kotak">
      <img src="../../../asset/img/<?php echo $d['gambar'] ?>">
      <div class="keterangan">
        <center>
        <p><?php echo $d['nama_buku']; ?></p>
        <p><?php echo $d['tipe_buku']; ?></p>
        <p><?php echo $d['kode_buku']; ?></p>
        </center>
      </div>
    </div>

  <?php } ?>
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
            <div class="form" onscroll="myFunction()">
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
          </div>
          <div class="apakek">
            <input type="file" id="file" name="gambar" onchange="return fileValidation()">
          </div>
          <div id="imagePreview"></div>
        </div>
        <input type="submit" class="tes" name="submit">
      </div>
    </center>
  </form>
</div>
<script src="../../../asset/js/petugas1.js"></script>