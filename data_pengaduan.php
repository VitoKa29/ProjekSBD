<head>
<style>
  th, td, h1{
    text-align:center;
  }
</style>
</head>
<?php

session_start();
$nik = $_SESSION["nik"];

include 'proses.php';
$db = new database();
	
	echo "
  <div class='card-body'>
  <h1>Data Pengaduan Saya</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>ID Pengaduan</th>
        <th>NIK</th>
        <th>Tanggal Pengaduan</th>
        <th>Judul</th>
        <th>Kategori Laporan</th>
        <th>Lokasi</th>
        <th>Instansi Tujuan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_saya($nik) as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[id_pengaduan]</td>
            <td>$data[nik]</td>
            <td>$data[tgl_pengaduan]</td>
            <td>$data[judul]</td>
            <td>$data[kategori]</td>
            <td>$data[lokasi]</td>
            <td>$data[instansi_tujuan]</td>
            <td>$data[status]</td>
					  <td><a href = 'index.php?page=detail_saya&id=$data[id_pengaduan]' class = 'btn btn-block btn-danger'>Detail</a></td>
				</tr>
		";
	}
	
  echo "    
    </table>
    </div>
  ";
?>
<script type = "text/javascript">
function hapus(){
    var pesan = confirm("Apakah Anda Yakin Mau Menghapus ??");
        if( pesan == true ){
            return true;
        }else{
            return false;
        }
}
</script>


                  
