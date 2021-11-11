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
        <th>ID Kategori</th>
        <th>Nama Kategori</th>
        <th colspan='2'>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_kategori() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[id_kategori]</td>
            <td>$data[nama_kategori]</td>
			<td><a href = 'index.php?page=ubah_kategori&id=$data[id_kategori]' class = 'btn btn-block btn-dark'>Ubah</a></td>
            <td><a href = 'crud.php?aksi=hapus_kategori&id=$data[id_kategori]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
