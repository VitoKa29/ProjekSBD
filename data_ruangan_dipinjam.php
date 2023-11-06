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
  <h1>Data Ruangan Dipinjam</h1>
  <div class='search-box' style='margin-left:65%;margin-bottom:3%;'>
    <form action='cari.php?hal=pegawai' method='POST' class='input' >
</label>
    </form>
</div>
  <table class='table table-bordered'>
    <thead>                  
      <tr class='tr'>
        <th>Mahasiswa</th>
        <th>Nomor Ruang</th>
        <th>Sesi</th>
        <th>Tanggal Pinjam</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>
	";
	
	foreach( $db->tampil_data_dipinjam() as $data ){
				   
          echo "
          <tr class='tr'>
            <td>$data[nim] - $data[nama]</td>
            <td>$data[nomorRuang]</td>
            <td>$data[kodeSesi] - $data[hari] ($data[jam_mulai] - $data[jam_selesai])</td>
            <td>$data[tglPinjam]</td>
            <td>$data[keterangan]</td>            
            <td><a href = 'crud.php?aksi=hapus_peminjaman_ruang&nim=$data[nim]&ruangan=$data[nomorRuang]&sesi=$data[kodeSesi]' onclick = 'return hapus()' class = 'btn btn-block btn-danger'>Selesai</a></td>
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
    var pesan = confirm("Apakah Anda Yakin Mau Menyelesaikan Peminjaman ??");
        if( pesan == true ){
            return true;
        }else{
            return false;
        }
}
</script>


                  
