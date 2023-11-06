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

$sql = mysql_query(" SELECT * FROM logpeminjaman inner join mahasiswa on logpeminjaman.nim = mahasiswa.nim
                      inner join sesi on logpeminjaman.kodeSesi = sesi.kodeSesi
                      WHERE logpeminjaman.tglPinjam BETWEEN '$tanggal_dari' AND '$tanggal_sampai'; ");
$cek = mysql_num_rows($sql);

if($cek < 1){
    echo"
    <script>
        alert('Maaf, Laporan Tidak Tersedia');
        window.location.href='index.php?page=data_peminjaman_ruang';
    </script>
    
    ";  
}else{
    echo "
    <center>
    <div style='margin-left:-70%; margin-top:10%;' >
    <img src='assets/images/big/Logo-ukdw.png' width='85px'>
    </div>
    <div style='margin-top:-10%;'>
    <b>LAPORAN DATA PEMINJAMAN RUANG<br></b><br>
    Dari Tanggal : $tanggal_dari<br>
    Sampai Tanggal : $tanggal_sampai</div>
    </center><br><hr>
  <td><center>
  <div style='margin-top:5%; margin-bottom: 5%;'>
  
    <div class='card-body'>
    <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
      <form action='cari.php?hal=pegawai' method='POST' class='input' >
  </label>
      </form>
  </div>
    <table border='1'>
      <thead>                  
        <tr class='tr'>
          <th>Mahasiswa</th>
          <th>Ruangan</th>
          <th>Sesi</th>
          <th>Keterangan</th>
          <th>Tanggal Pinjam</th>
        </tr>
      </thead>
      ";
      
      while( $data = mysql_fetch_array($sql) ){
                     
  
            echo "
            <tr class='tr'>
              <td>$data[nim] - $data[nama]</td>
              <td>$data[nomorRuang]</td>
              <td>$data[kodeSesi] - $data[hari] ($data[jam_mulai] - $data[jam_selesai])</td>
              <td>$data[keterangan]</td>
              <td>$data[tglPinjam]</td>
          </tr>
          ";
      }
      
      
    echo "    
      </table>
      </div></div>
    ";
}
	

?>
<div>
<table width=70% align='right' style="margin-right:-15%;">
<br><br><br><br>
  <tr>
    <td colspan=8 >Yogyakarta, ______________ 
    <br><br>Mengetahui
    <br><br><br><br><br>
    (.........................................)</td>
  </tr>

</table>
</div>

  <?php
  echo"<script>window.print();</script>
  ";
  ?>