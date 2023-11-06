<?php 
error_reporting(0);

include 'proses.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['tanggal'],$nik,$_POST['judul'],$_POST['isi'],$_POST['lokasi'],$_POST['instansi'],$_POST['kategori'],$_FILES['gambar']['name'] );
 	
}elseif($aksi == "registrasi"){
 	$db->registrasi($_POST['nama'],$_POST['username'],md5($_POST['password']));
}elseif($aksi == "login"){
	$db->login($_POST['username'],md5($_POST['password']));
}
elseif($aksi == "tambah_pemakaian_ruang"){
	$db->tambah_pemakaian_ruang($_POST['matkul'],$_POST['tahun'],$_POST['semester'],$_POST['grup'],$_POST['ruangan'],$_POST['sesi']);
}
elseif($aksi == "tambah_peminjaman_ruang"){
	$db->tambah_peminjaman_ruang($_POST['nim'],$_POST['ruangan'],$_POST['sesi'],$_POST['tanggal'],$_POST['keterangan']);
}
elseif($aksi == "hapus_pemakaian_ruang"){
	$db->hapus_pemakaian_ruang($_GET['matkul'],$_GET['tahun'],$_GET['semester'],$_GET['grup']);
}
elseif($aksi == "hapus_peminjaman_ruang"){
	$db->hapus_peminjaman_ruang($_GET['nim'],$_GET['ruangan'],$_GET['sesi']);
}
?>