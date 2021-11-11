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
  <h1>Data Petugas</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>ID Petugas</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Level</th>
        <th>Instansi</th>
        <th>Telepon</th>
        <th colspan='2'>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_petugas() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[id_petugas]</td>
            <td>$data[nama_petugas]</td>
            <td>$data[username]</td>
            <td>$data[level]</td>
            <td>$data[instansi]</td>
            <td>$data[telp]</td>
					  <td><a href = 'index.php?page=ubah_petugas&id=$data[id_petugas]' class = 'btn btn-block btn-dark'>Ubah</a></td>
            <td><a href = 'crud.php?aksi=hapus_petugas&id=$data[id_petugas]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
