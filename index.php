<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <link rel="stylesheet" href="assets/css/index.css">
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
    	<form action="private/config/cek_login.php" method="post">
	    <div class="box1">
	      <center>
	        <h1>Login</h1>
	      </center>
	      <div class="box2">
	        <div class="form">
	          <input type="text" name="username" required="" autocomplete="off">
	          <label for="name" class="label-name">
	              <span class="content-name">Username</span>
	          </label>
	        </div>

	        <div class="form2">
	          <input type="password" name="password" required="" autocomplete="off">
	          <label for="name" class="label-name2">
	              <span class="content-name2">Password</span>
	          </label>
	        </div>
	        <input type="submit" class="login" value="Login">
        </div>
	    </div>
	</form>
    </div>
  </center>


</body>
</html>