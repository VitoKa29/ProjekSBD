<?php 
error_reporting(0);

include 'proses.php';
$db = new database();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah_sesi"){
 	$db->input_sesi( $_POST['kode_sesi'],$_POST['hari'],$_POST['jam_mulai'],$_POST['jam_selesai']);
}elseif($aksi == "tambah_admin"){
	$db->input_admin( $_POST['nama'],$_POST['username'],md5($_POST['password']),$_POST['level']);
}elseif($aksi == "input_ruangan"){
 	$db->input_ruangan($_POST['nomor_ruang'],$_POST['gedung'],$_POST['kapasitas']);
}elseif($aksi == "tambah_prodi"){
	$db->input_prodi($_POST['kode_prodi'], $_POST['nama_prodi'], $_POST['fakultas']);
}elseif($aksi == "tambah_matkul"){
	$db->input_matkul( $_POST['id_matkul'],$_POST['nama_matkul'],$_POST['prodi'],$_POST['sks']);
}elseif($aksi == "tambah_mahasiswa"){
	$db->input_mahasiswa( $_POST['nim'],$_POST['nama'],$_POST['prodi'],$_POST['sks']);
}elseif($aksi == "login"){
	$db->login($_POST['username'],md5($_POST['password']));
}elseif($aksi == "hapus_ruangan"){
	$db->hapus_ruangan($_GET['id']);
}elseif($aksi == "hapus_admin"){
	$db->hapus_admin($_GET['id']);
}elseif($aksi == "ubah_ruangan"){
	$db->ubah_ruangan($_POST['gedung'],$_POST['kapasitas'],$_POST['id']);
}elseif($aksi == "ubah_matkul"){
	$db->ubah_matkul($_POST['nama_matkul'],$_POST['sks'],$_POST['prodi'],$_POST['id']);
}elseif($aksi == "ubah_mahasiswa"){
	$db->ubah_mahasiswa($_POST['nama'],$_POST['sks'],$_POST['prodi'],$_POST['id']);
}elseif($aksi == "ubah_admin"){
	$db->ubah_admin($_POST['nama'],$_POST['id']);
}elseif($aksi == "hapus_sesi"){
	$db->hapus_sesi($_GET['id']);
}elseif($aksi == "hapus_prodi"){
	$db->hapus_prodi($_GET['id']);
}elseif($aksi == "hapus_matkul"){
	$db->hapus_matkul($_GET['id']);
}elseif($aksi == "ubah_sesi"){
	$db->ubah_sesi($_POST['hari'],$_POST['jam_mulai'],$_POST['jam_selesai'],$_POST['id']);
}elseif($aksi == "ubah_prodi"){
	$db->ubah_prodi($_POST['nama_prodi'],$_POST['fakultas'],$_POST['id']);
}
 
?>