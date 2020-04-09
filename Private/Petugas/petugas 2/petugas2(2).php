<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Book Borrowed</title>
  <link rel="stylesheet" href="../../../asset/css/petugas2(2).css">
</head>

<body>
  <!-- Part Header -->
  <div class="header">
    <table width="100%" class="tbheader">
      <tr>
        <td width="20%" >
          <h1 class="logo">Skenary</h1>
        </td>
        <td width="50%"></td>
        <td width="12.5%">
          <a href="#" class="nav">Book Borrowed</a>
        </td>
        <td width="12.5%">
          <a href="index.php" class="active">Book Borrow</a>
        </td>
        <td>
          <img src="../../../asset/img/menunav.jpg" class="menunav" alt="">
        </td>
      </tr>
    </table>
  </div>
  <!-- End Part -->
  <br><br><br><br><br><br><br><br><br>
  <!-- Part Body -->
  <div class="body" >
    <table class="tbbody" width="100%" >
      <tr>
        <td class="tdbody" colspan="2">
          <h2 class="title">Book That Been Borrowed</h2>
        </td>
      </tr>
      <tr>
        <td width="50%" class="tdoption">
          <select class="option" type="text">
            <option value="" class="ioption">Search Berdasarkan</option>
            <option value="" class="ioption">Deadline Only</option>
            <option value="" class="ioption">All</option>
          </select>
        </td>
        <td width="50%" class="tdsearch">
          <input type="text" name="" placeholder="Search Student Name" class="search" value="">
        </td>
      </tr>
      <tr height="150px">
        <td width="50%">
          <!-- Isi Form Buat Backend -->
          <div class="siswa">
            <table  class="tbsiswa"width="100%">
              <tr>
                <td colspan="2" height="10px">
                  <h4 class="a">Nama Siswa</h4>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <p class="b">Buku yang dipinjam</p>
                </td>
              </tr>
              <tr>
                <td colspan="2"><p class="c">Kode Inventaris </p></td>
              </tr>
              <tr>
                <td width="70%">
                  <a href="#" class="d">check details</a>
                </td>
                <td>
                  <input type="date" name="" placeholder="27-01-2019" class="tanggal"value="">
                </td>
              </tr>
            </table>
          </div>
          <!-- Sampe sini -->
        </td>
        <td width="50%"></td>
      </tr>
    </table>
  </div>
  <!-- End Part -->

</body>
</html>
