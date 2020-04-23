<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <link rel="stylesheet" href="../asset/css/index.css">
</head>
<body>

	<?php 

		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				$pesan = "Username dan Password tidak sesuai !";
				echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
			if($_GET['pesan']=="error"){
				$pesan = "Anda tidak memiliki hak akses !";
				echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
			if($_GET['pesan']=="berhasil"){
				$pesan = "Akun berhasil dibuat !";
				echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
		}

	?>
 
	<center>
    <div class="img">
    	<form action="../config/cek_register.php" method="post">
	    <div class="box1">
	      <center>
	        <h1>Register</h1>
	      </center>
	      <div class="box2">

	      	<div class="form0">
	          <input type="text" id="email" name="email" required="" autocomplete="off">
	          <label for="name" class="label-name0">
	              <span class="content-name0">Email</span>
	          </label>
	        </div>

	        <div class="form">
	          <input type="text" id="username" name="username" required="" autocomplete="off">
	          <label for="name" class="label-name">
	              <span class="content-name" style="margin-top: -20px;">Username</span>
	          </label>
	        </div>

	        <div class="form2">
	          <input type="password" name="password" required="" autocomplete="off">
	          <label for="name" class="label-name2">
	              <span class="content-name2">Password</span>
	          </label>
	        </div>

			<br>

	        <div class="form3">
	          <label for="name" class="label-name3">
	            <span class="content-name3">Level</span>
	          </label>
	          <select name="level" class="level" required="">
		        <option value="petugas1">Petugas 1</option>
		        <option value="petugas2">Petugas 2</option>
		        <option value="petugas3">Petugas 3</option>
		      </select>
	        </div>
	        <input type="submit" onclick="nama()" name="submit" class="login" value="Register">
        </div>
	    </div>
	</form>
    </div>
  </center>



</body>
</html>