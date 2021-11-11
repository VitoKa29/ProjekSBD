<br><br>
<td><center><img src='../assets/images/big/ayo_lapor.png' width='250px'>
<table border="1" align ="center" width="750px" height="50px"><br><br>


  <center><b>LAPORAN DATA PENGADUAN <br></b></center><br><br>

  <?php
    include "koneksi.php";

    $id = $_GET["id"];

    $sql = mysql_query(" SELECT * FROM pengaduan WHERE id_pengaduan = '$id' ");
    $data = mysql_fetch_array($sql);

    $sql1 = mysql_query(" SELECT * FROM masyarakat WHERE nik = '$data[nik]' ");
    $data1 = mysql_fetch_array($sql1);

  echo"
    <table class='table table-bordered'>
    <tr>
        <td><b>ID Pengaduan</td>
        <td>:</td>
        <td><b>$data[id_pengaduan]</td>
    </tr>
    <tr>
        <td><b>Tanggal Pengaduan</td>
        <td>:</td>
        <td><b>$data[tgl_pengaduan]</td>
    </tr>
    <tr>
        <td><b>NIK</td>
        <td>:</td>
        <td><b>$data[nik]</td>
    </tr>
    <tr>
        <td><b>Nama Pelapor</td>
        <td>:</td>
        <td><b>$data1[nama]</td>
    </tr>
    <tr>
        <td><b>Telepon Pelapor</td>
        <td>:</td>
        <td><b>$data1[telp]</td>
    </tr>
    <tr>
        <td><b>Judul Laporan</td>
        <td>:</td>
        <td><b>$data[judul]</td>
    </tr>
    <tr>
        <td><b>Kategori Laporan</td>
        <td>:</td>
        <td><b>$data[kategori]</td>
    </tr>
    <tr>
        <td><b>Isi Laporan</td>
        <td>:</td>
        <td><b>$data[isi_laporan]</td>
    </tr>
    <tr>
        <td><b>Lokasi</td>
        <td>:</td>
        <td><b>$data[lokasi]</td>
    </tr>
    <tr>
        <td><b>Instansi Tujuan</td>
        <td>:</td>
        <td><b>$data[instansi_tujuan]</td>
    </tr>
    <tr>
        <td><b>Status</td>
        <td>:</td>
        <td><b>$data[status]</td>
    </tr>
    <tr>
        <td><b>Foto</td>
        <td>:</td>
        ";
  ?>
  <td><img src="../gambar/<?php echo $data["foto"]; ?>" width="500" height="300"></td>
    </tr>
</table>

<table  width=70% align='right'>
<br><br><br><br>
  <tr>
    <td colspan=8><center>Semarang, ______________ 
    <br>Mengetahui
    <br><br><br><br>
    (..........................)</td>
  </tr>
</center>
</table>

  <?php
  echo"<script>window.print();</script>
  ";
  ?>