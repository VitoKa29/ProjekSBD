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
  <h1>Data Mahasiswa</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
  <a href = 'index.php?page=tambah_mahasiswa' style='margin-left:65%;' class = 'btn btn-small btn-success'>Tambah Data</a>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>SKS Total</th>
        <th colspan='2'>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_mahasiswa() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[nim]</td>
            <td>$data[nama]</td>
            <td>$data[namaProdi]</td>
            <td>$data[sksTotal]</td>
					  <td><a href = 'index.php?page=ubah_mahasiswa&id=$data[nim]' class = 'btn btn-block btn-dark'>Ubah</a></td>
            <td><a href = 'crud.php?aksi=hapus_mahasiswa&id=$data[nim]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
