<?php 
error_reporting(0);

include 'proses.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah_petugas"){
 	$db->input_petugas( $_POST['nama'],$_POST['username'],md5($_POST['password']),$_POST['level'],$_POST['telepon']);
 }elseif($aksi == "tambah_kategori"){
 	$db->input_kategori($_POST['nama_kategori']);
 }elseif($aksi == "login"){
	$db->login($_POST['username'],md5($_POST['password']));
}elseif($aksi == "hapus_petugas"){
	$db->hapus_petugas($_GET['id']);
}elseif($aksi == "ubah_petugas"){
	$db->ubah_petugas($_POST['nama'],$_POST['level'],$_POST['telepon'],$_POST['id']);
}elseif($aksi == "hapus_kategori"){
	$db->hapus_kategori($_GET['id']);
}elseif($aksi == "ubah_kategori"){
	$db->ubah_kategori($_POST['nama_kategori'],$_POST['id']);
}elseif($aksi == "terima"){
	$db->terima($_GET['id']);
}elseif($aksi == "tolak"){
	$db->tolak($_POST['tanggapan'],$_POST['id']);
}elseif($aksi == "diproses"){
	$db->diproses($_POST['tanggapan'],$_POST['id']);
}elseif($aksi == "selesai"){
	$db->selesai($_POST['tanggapan'],$_POST['id']);
}
 
?>