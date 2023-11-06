<head>
<style>
  th, td, h1{
    text-align:center;
  }
</style>
</head>
<?php

include 'proses.php';
$db = new database();
	
	echo "
  <div class='card-body'>
  <h1>Data Sesi</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
  <a href = 'index.php?page=tambah_sesi' style='margin-left:65%;' class = 'btn btn-small btn-success'>Tambah Data</a>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>Kode Sesi</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th colspan='2'>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_sesi() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[kodeSesi]</td>
            <td>$data[hari]</td>
            <td>$data[jam_mulai]</td>
            <td>$data[jam_selesai]</td>
			<td><a href = 'index.php?page=ubah_sesi&id=$data[kodeSesi]' class = 'btn btn-block btn-dark'>Ubah</a></td>
            <td><a href = 'crud.php?aksi=hapus_sesi&id=$data[kodeSesi]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
