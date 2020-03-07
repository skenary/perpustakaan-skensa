<!DOCTYPE html>
<html>
<head>
  <title>Skenary</title>
</head>
<style>
        * { padding-top: 0;
            margin-top: 0px;
        }
        
        body{
          background-image: url('../asset/IMG/gambar1.jpg');
        }
        .box1{
          margin-top: 13%;
          width: 27%;
          height: 350px;
          border-radius: 20px;
		      background-color: rgba(255, 255, 255,1);
        }
        .box1 h1{
          font-family: hoeflertext;
          padding-top: 10px;
          margin-bottom: 0px;
          font-size: 40px;
          color: black;
        }
        .box2{
          border-left: 5px solid black;
          border-right: 5px solid black;
          padding: 25px;
          width: 250px;
          height: 160px;
        }
        @font-face{
          font-family:hoeflertext;
          scr : url(..css/hoeflertext.ttf);
         }
        .login{
        	margin-top: 35px;
        	background-color: black;
        	color: white;
        	width: 65px;
        	height: 30px;
        	border:1px solid white;
        	border-radius: 5px;
        }
        .login a{
          text-decoration: none;
          color: white;
        }

        .login:hover{
          background-color: gray;
        }     
        .form{
          font-size: 25px;
          padding-top: 25px;
          width: 70%;
          position: relative;
          height: 35px;
          overflow: hidden;
        }

        .form input{
          font-size: 15px;
          padding-left: 5px;
          background-color: rgba(255,255,255,1);
          width: 100%;
          height: 100%;
          color: blue;
          padding-top: 5px;
          border: none;
          outline: none;
        }

        .form label{
          position: absolute;
          bottom: 0px;
          left: 0%;
          width: 100%;
          height: 100%;
          pointer-events: none;
          border-bottom: 1px solid black;
        }

        .form label::after{
          content: "";
          position: absolute;
          left: 0px;
          bottom: -1px;
          height: 100%;
          width: 100%;
          border-bottom: 3px solid red;
          transform: translate(-100%);
          transition: transform 0.3s ease;
        }

        .content-name{
          position: absolute;
          bottom: 5px;
          left: 0px;
          transition: all 0.3s ease;
        }

        .form input:focus + .label-name .content-name, 
        .form input:valid + .label-name .content-name{
          transform: translateY(-90%);
          font-size: 14px;
          color: red;
        }

        .form input:focus +.label-name::after, 
        .form input:valid + .label-name:after{
          transform: translateX(0%);
        }






        .form2{
          font-size: 25px;
          padding-top: 20px;
          width: 70%;
          position: relative;
          height: 35px;
          overflow: hidden;
        }

        .form2 input{
          font-size: 15px;
          padding-left: 5px;
          background-color: rgba(255,255,255,1);
          width: 100%;
          height: 100%;
          color: red;
          padding-top: 5px;
          border: none;
          outline: none;
        }

        .form2 label{
          position: absolute;
          bottom: 0px;
          left: 0%;
          width: 100%;
          height: 100%;
          pointer-events: none;
          border-bottom: 1px solid black;
        }

        .form2 label::after{
          content: "";
          position: absolute;
          left: 0px;
          bottom: -1px;
          height: 100%;
          width: 100%;
          border-bottom: 3px solid blue;
          transform: translate(-100%);
          transition: transform 0.3s ease;
        }

        .content-name2{
          position: absolute;
          bottom: 5px;
          left: 0px;
          transition: all 0.3s ease;
        }

        .form2 input:focus + .label-name2 .content-name2, 
        .form2 input:valid + .label-name2 .content-name2{
          transform: translateY(-90%);
          font-size: 14px;
          color: blue;
        }

        .form2 input:focus +.label-name2::after, 
        .form2 input:valid + .label-name2:after{
          transform: translateX(0%);
        }

</style>
<body>
  <center>
    <div class="img">
	    <div class="box1">
	      <center>
          <br>
	        <h1>Login</h1>
	      </center>
	      <div class="box2">
	        <div class="form">
	          <input type="text" name="name" required="" autocomplete="off">
	          <label for="name" class="label-name">
	              <span class="content-name">Username</span>
	          </label>
	        </div>

	        <div class="form2">
	          <input type="password" name="name" required="" autocomplete="off">
	          <label for="name" class="label-name2">
	              <span class="content-name2">Password</span>
	          </label>
	        </div>
	        <button class="login"><a href="Petugas/Petugas 1/index.php">Login</a></button>
	    </div>
    </div>
  </center>
</body>
</html>