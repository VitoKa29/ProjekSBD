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
  <h1>Data Mata Kuliah</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
  <a href = 'index.php?page=tambah_matkul' style='margin-left:65%;' class = 'btn btn-small btn-success'>Tambah Data</a>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>ID Matkul</th>
        <th>Nama Matkul</th>
        <th>Prodi</th>
        <th>SKS</th>
        <th colspan='2'>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_matkul() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[idMtk]</td>
            <td>$data[namaMtk]</td>
            <td>$data[namaProdi]</td>
            <td>$data[sks]</td>
					  <td><a href = 'index.php?page=ubah_matkul&id=$data[idMtk]' class = 'btn btn-block btn-dark'>Ubah</a></td>
            <td><a href = 'crud.php?aksi=hapus_matkul&id=$data[idMtk]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
