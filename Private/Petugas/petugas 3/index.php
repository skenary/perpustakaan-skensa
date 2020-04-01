<?php
    include_once('../config/koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampilan awal petugas3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

    *{
        margin:0;
        
    }
    
    i{
        width:50px;
    }

    .text{
        text-align:center;
        font-size:30px;
        margin-top:210px;
        color:white;
    }

    .text1{
        text-align:center;
        margin-bottom:80px;
        font-size:20px;
        color:white;
    }

    @font-face {
        font-family: hoeflertext;
        src: url(../font/hoeflertext.ttf);
    }

    .text{
        font-family:hoeflertext;
    }

    .text1{
        font-family:hoeflertext;
    }

    img{
        width:100%;
        height:650px;
            
    }

    .head{
        background-image: url(bg.jpg);
        height:100vh;
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
    }

    @font-face{
        font-family: Gloss_And_Bloom;
        src: url(../font/Gloss_And_Bloom.ttf);
    }

    .nav p{
        font-family:Gloss_And_Bloom;
        margin-left:50px;
        font-size:20px;
    }
    .nav{
        width:100%;

    }
    .content{
        width:100%;
        height:60px;
        background-color:grey;
    }

    .nav1{
        text-align:center;
    }

    .nav2{
        text-align:center;
    }

    .nav3{
        text-align:center;
    }
    
    .nav a{
        text-decoration:none;
        color:black;
        transition:0.50s;
    }

    .nav a:hover{
        background-color:black;
        color:white;
    }
    
    .nav1 a{
        border:1px solid black;
        padding:2px;
    }

    .nav2 a{
        border:1px solid black;
        padding:2px;
    }

    #popup{
        width:100px;
        height:100px;
        position:fixed;
        background: rgba(0,0,0,7);
        top:10%;
        right:50px;
        z-index:9999;
        visibility: hidden;
    }

    .window{
        width: 100px;
        height: 130px;
        background: #fff;
        border-radius: 10px;
        position: relative;
        padding: 10px;
        text-align: center;
        font-size: 18px;
    }

    .window ul li{
        margin-top: 15px;
        list-style: none;
        text-align: center;
        float: left;
    }

    .close-button{
        width: 10%;
        height: 15%;
        line-height: 20px;
        color: #000;
        display: block;
        text-align: left;
        font-size: 15px;
        text-decoration: none;
        position: absolute;
    }

    #popup:target{
        visibility: visible;
    }

    .content{
        width:100%;
        height:100vh;
    }
</style>
<body>
    <div class="head">
        <br>
            <i class="fa fa-bars" style="float:right; font-size:30px; color:white;"></i>
        <br>
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
                    <p>Skenary</p>
                </td>
                <td class="nav1" style="width:10%;">
                    <a href="#">Data Siswa</a>
                </td>
                <td class="nav2" style="width:10%;">
                    <a href="#">test2</a>
                </td>
                <td class="nav3" style="width:25px;">
                    <div id="button">
                            <a href="#popup">          
                                <i class="fa fa-bars" style="float:right; font-size:30px; color:black;"></i>
                            </a>
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
        <div class="content">
            <h1>TETS</h1>
        </div>
    </div>

</body>
</html>

    