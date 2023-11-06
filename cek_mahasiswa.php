<?php

include "koneksi.php";

$ruangan = $_POST["ruangan"];
$tanggal = $_POST["tanggal"];
$nim = $_POST["nim"];
$sesi = substr($_POST["sesi"],0,2);

$sql = mysql_query(" SELECT * FROM mahasiswa WHERE nim = '$nim'");
$cek = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);

if( $cek == 0 ){
    echo"
		<script>
		    alert('Maaf, NIM Tidak Terdaftar');
		    window.location.href='index.php?page=ruangan_dicari&ruangan=$ruangan&sesi=$sesi';
		</script>
		";
}else{
    echo"
    <script>
        window.location.href='index.php?page=mahasiswa_dicari&ruangan=$ruangan&sesi=$sesi&nim=$nim&tanggal=$tanggal&nama=$data[nama]';
    </script>
    ";
}


?>