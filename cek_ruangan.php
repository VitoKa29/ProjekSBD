<?php

include "koneksi.php";

$ruangan = $_POST["ruangan"];
$tanggal = $_POST["tanggal"];
$sesi = substr($_POST["sesi"],0,2);

$sql = mysql_query(" SELECT * FROM jadwalkuliah inner join matakuliah on jadwalkuliah.idMtk = matakuliah.idMtk
                        WHERE jadwalkuliah.nomorRuang = '$ruangan' and jadwalkuliah.kodeSesi = '$sesi' ");
$cek = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);


$sql1 = mysql_query(" SELECT * FROM peminjaman inner join mahasiswa on peminjaman.nim = mahasiswa.nim
                        WHERE peminjaman.nomorRuang = '$ruangan' and peminjaman.kodeSesi = '$sesi' and peminjaman.tglPinjam = '$tanggal' ");
$cek1 = mysql_num_rows($sql1);
$data1 = mysql_fetch_array($sql1);

if( $cek ){
    echo"
		<script>
		    alert('Ruangan Sudah Terpakai Untuk Pembelajaran $data[namaMtk]');
		    window.location.href='index.php?page=tambah_peminjaman_ruang';
		</script>
		";
}elseif( $cek1 ){
    echo"
		<script>
		    alert('Ruangan Sudah Dipinjam oleh $data1[nim] - $data1[nama]');
		    window.location.href='index.php?page=tambah_peminjaman_ruang';
		</script>
		";
}
else{
    echo"
    <script>
        window.location.href='index.php?page=ruangan_dicari&ruangan=$ruangan&sesi=$sesi&tanggal=$tanggal';
    </script>
    ";
}


?>