<?php 
error_reporting(0);

include 'proses.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input( $_POST['tanggal'],$nik,$_POST['judul'],$_POST['isi'],$_POST['lokasi'],$_POST['instansi'],$_POST['kategori'],$_FILES['gambar']['name'] );
 	
 }elseif($aksi == "registrasi"){
 	$db->registrasi($_POST['nik'],$_POST['nama'],$_POST['username'],md5($_POST['password']),$_POST['telepon']);
 }elseif($aksi == "login"){
	$db->login($_POST['username'],md5($_POST['password']));
}
 
?>