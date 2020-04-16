<?php
    include ('../../../config/koneksi.php'); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampilan awal petugas3</title>
    <link rel="stylesheet" href="../../../asset/css/petugas3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="head">
        <br>
            <i class="fa fa-bars" style="float:right; font-size:30px; color:white;"></i>
        <br>
        <img src=" ../../../asset/img/logo2.png">
        <div class="text">
            <h1>Hai Petugas 3</h1>
        </div>
        <div class="text1">
            <h5>Welcome back to Skenary</h5>
        </div>    
    </div>

    <div class="content">
        <table class="nav" border="2px" cellpadding="5px;">
            <tr>
                <td>
                    <center><p>DATA PEMINJAMAN PRIBADI</p></center>
                </td>

             
                <td class="nav3" style="width:25px;">
                    <div id="button">
                            <a href="#popup">          
                                <i class="fa fa-bars" style="float:right; font-size:30px; color:black;"></i>
                            </a>
                    </div>
                    </tr>
                </table>
                <table class="nav" border="2px" cellpadding="5px;">
                    <tr>
                    <th>No</th>
                    <th>Nama Peminjaman</th>
                    <th>Kode Buku</th>
                    <th>Jenis Buku</th>
                    <th>Lama Peminjaman</th>
                    <th>Jumlah Buku</th>
                    <th><a href="denda.php">Denda</a></th>
                 

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
        </table>
       
    </div>

</body>
</html>

    
