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
  <h1>Data Pemakaian Ruang</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>Mata Kuliah</th>
        <th>Tahun</th>
        <th>Semester</th>
        <th>Grup</th>
        <th>Ruangan</th>
        <th>Sesi</th>
        <th>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_ruang() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[idMtk] - $data[namaMtk]</td>
            <td>$data[tahun]</td>
            <td>$data[semester]</td>
            <td>$data[grup]</td>
            <td>$data[nomorRuang]</td>
            <td>$data[kodeSesi] - $data[hari] ($data[jam_mulai] - $data[jam_selesai])</td>
            <td><a href = 'crud.php?aksi=hapus_pemakaian_ruang&matkul=$data[idMtk]&tahun=$data[tahun]&semester=$data[semester]&grup=$data[grup]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Hapus</a></td>
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


                  
