<?php
    include ('../../../config/koneksi.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Skenary</title>
    <link rel="stylesheet" type="text/css" href="../../../asset/css/petugas3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            header("location:index.php?pesan=error");
        } else if($_SESSION['level']=="petugas1"){
            header("location:../petugas 1/index.php?pesan=error");
        } else if($_SESSION['level']=="petugas2"){
            header("location:../petugas 1/index.php?pesan=error");
        }
 
    ?>
<body>
    <div class="head">
        <br>
        <a href="../../logout.php" onclick="return confirm('Anda Yakin Ingin Keluar?')"> >
            <i class="fa fa-bars" style="float:right; font-size:30px; color:white;"></i>
        </a>
        <br>
        <div class="text">
            <h1>Hai Petugas <?php echo  $_SESSION['datanama'] ?>!</h1>
        </div>
        <div class="text1">
            <h5>Welcome back to Skenary</h5>
        </div>    
    </div>

    <div class="header">
        <header id="skenary">Skenary</header>
        <div class="tampil">
            <a id="addb" class="data" href="#" style="border: 1px solid black">Data Siswa</a>
            <a id="addv" class="data2" href="#" style="border: 1px solid black">Laporan</a>
            <a href="#popup"><i class="fa fa-bars"></i></a>
        </div>
                    <div id="popup">
                        <div class="window">
                         <a href="#" class="close-button" title="close">X</a>
                         <ul>
                            <li><u>Home</u></li>
                            <li><u>About</u></li>
                            <li><u>Log out</u></li>
                         </ul>
                        </div>
                    </div>
                </td>
            </tr>
        </div>

        
        <div class="content">
            <h1>CONTENT</h1>
        </div>
    

</body>
</html>

    <!--
 <td class="nav3" style="width:25px;">
                    <div id="button">
                            <a href="#popup">          
                                <i class="fa fa-bars" style="float:right; font-size:30px; color:black;"></i>
                            </a>
                    </div>