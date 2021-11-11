<head>
<style>
  th, td, h1{
    text-align:center;
  }
</style>
</head>


<?php

include 'koneksi.php';

$tanggal_dari = $_POST["tanggal_dari"];
$tanggal_sampai = $_POST["tanggal_sampai"];

$sql = mysql_query(" SELECT * FROM pengaduan WHERE tgl_pengaduan BETWEEN '$tanggal_dari' AND '$tanggal_sampai'; ");
$cek = mysql_num_rows($sql);

if($cek < 1){
    echo"
    <script>
        alert('Maaf, Laporan Tidak Tersedia');
        window.location.href='index.php?page=laporan_pengaduan';
    </script>
    
    ";  
}else{
    echo "
    <center>
    <b>LAPORAN DATA PENGADUAN <br></b><br>
    Dari Tanggal : $tanggal_dari<br>
    Sampai Tanggal : $tanggal_sampai
    </center><br><hr><br>
    <br><br>
<td><center><img src='../assets/images/big/ayo_lapor.png' width='250px'>
<table border='1' align ='center' width='750px' height='50px'><br><br>

    <div class='card-body'>
    <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
      <form action='cari.php?hal=pegawai' method='POST' class='input' >
  </label>
      </form>
  </div>
    <table border='1'>
      <thead>                  
        <tr class='tr'>
          <th>NIK</th>
          <th>Nama</th>
          <th>Tanggal Pengaduan</th>
          <th>Judul</th>
          <th>Kategori</th>
          <th>Lokasi</th>
          <th>Instansi Tujuan</th>
          <th>Status</th>
        </tr>
      </thead>
      ";
      
      while( $data = mysql_fetch_array($sql) ){
                     
          $query = mysql_query(" SELECT * FROM masyarakat WHERE nik = '$data[nik]' ");
          $nama = mysql_fetch_array($query);
  
            echo "
            <tr class='tr'>
              <td>$data[nik]</td>
              <td>$nama[nama]</td>
              <td>$data[tgl_pengaduan]</td>
              <td>$data[judul]</td>
              <td>$data[kategori]</td>
              <td>$data[lokasi]</td>
              <td>$data[instansi_tujuan]</td>
              <td>$data[status]</td>
          </tr>
          ";
      }
      
    echo "    
      </table>
      </div>
    ";
}
	

?>

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

                  
