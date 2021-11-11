<?php 

class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "ayolapor";
	
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}
    function detail($id){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE id_pengaduan = '$id' ");
		$hasil[] = $data = mysql_fetch_array($sql);
		
		return $hasil;
	}
	function tanggapan($id){
		$sql = mysql_query(" SELECT * FROM tanggapan WHERE id_pengaduan = '$id' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_diterima(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Terima' AND instansi_tujuan='$_SESSION[instansi]' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_ditolak(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Tolak' AND instansi_tujuan='$_SESSION[instansi]' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_diproses(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Proses' AND instansi_tujuan='$_SESSION[instansi]' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_selesai(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Selesai' AND instansi_tujuan='$_SESSION[instansi]' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function terima($id){
		mysql_query(" UPDATE pengaduan SET status='Di Terima' WHERE id_pengaduan = '$id' ");
		echo"
    <script>
        alert('Pengaduan Telah Diterima');
        window.location.href='index.php?page=pengaduan_masuk';
    </script>
    
    ";  
	}
    function tolak($tanggapan,$id){
        session_start();
        $username = $_SESSION["username"];

        $sql = mysql_query(" SELECT * FROM petugas WHERE username='$username' ");
        $data = mysql_fetch_array($sql);

		mysql_query(" UPDATE pengaduan SET status='Di Tolak' WHERE id_pengaduan = '$id' ");
        mysql_query(" INSERT INTO tanggapan(id_pengaduan,tanggapan,id_petugas) VALUES('$id','$tanggapan','$data[id_petugas]')  ");
		echo"
    <script>
        alert('Pengaduan Telah Ditolak Dan Ditanggapi');
        window.location.href='index.php?page=pengaduan_masuk';
    </script>
    
    ";  
	}
    function diproses($tanggapan,$id){
        session_start();
        $username = $_SESSION["username"];

        $sql = mysql_query(" SELECT * FROM petugas WHERE username='$username' ");
        $data = mysql_fetch_array($sql);

		mysql_query(" UPDATE pengaduan SET status='Di Proses' WHERE id_pengaduan = '$id' ");
        mysql_query(" INSERT INTO tanggapan(id_pengaduan,tanggapan,id_petugas) VALUES('$id','$tanggapan','$data[id_petugas]') ");
		echo"
    <script>
        alert('Pengaduan Telah Diproses Dan Ditanggapi');
        window.location.href='index.php?page=pengaduan_diterima';
    </script>
    
    ";  
	}
    function selesai($tanggapan,$id){
        session_start();
        $username = $_SESSION["username"];

        $sql = mysql_query(" SELECT * FROM petugas WHERE username='$username' ");
        $data = mysql_fetch_array($sql);

		mysql_query(" UPDATE pengaduan SET status='Selesai' WHERE id_pengaduan = '$id' ");
        mysql_query(" UPDATE tanggapan SET tanggapan='$tanggapan', id_petugas = '$data[id_petugas]' WHERE id_pengaduan = '$id' ");
		echo"
    <script>
        alert('Pengaduan Telah Diselesaikan Dan Ditanggapi');
        window.location.href='index.php?page=pengaduan_diproses';
    </script>
    
    ";  
	}
    function profile($username){

		$sql = mysql_query(" SELECT * FROM petugas WHERE username = '$username' ");
		$hasil[] = $data = mysql_fetch_array($sql);
		
		return $hasil;
	}
	function login($username,$password){
        $sql = mysql_query("SELECT * FROM petugas WHERE username = '$username' AND password = '$password' AND level = 'Petugas' ");
$cek = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);

session_start();
$_SESSION["username"] = $data["username"];
$_SESSION["nama"] = $data["nama_petugas"];
$_SESSION["instansi"] = $data["instansi"];

if( $cek ) {
    echo"
    <script>
        alert('Login Berhasil');
        window.location.href='index.php';
    </script>
    
    ";  
}else{
    echo"
    <script>
        alert('Maaf, Username atau Password yang anda inputkan salah');
        window.location.href='login_admin.html';
    </script>
    ";
}
	}
	
	function input_petugas($nama,$username,$password,$level,$telepon){
		$sql = mysql_query("SELECT * FROM petugas WHERE username = '$username' ");
$cek = mysql_num_rows($sql);


if( $cek ) {
    echo"
    <script>
        alert('Maaf, Username Sudah Terdaftar');
        window.location.href='index.php?page=tambah_petugas';
    </script>
    
    ";  
}else{

        mysql_query("INSERT INTO petugas(nama_petugas,username,password,telp,level) VALUES('$nama','$username','$password','$telepon','$level')");
        echo"
        <script>
            alert('Pendaftaran Petugas Berhasil');
            window.location.href='index.php?page=tambah_petugas';
        </script>
        ";
   
    
}
	}
	function input_kategori($kategori){
		$sql = mysql_query("SELECT * FROM kategori WHERE nama_kategori = '$kategori' ");
$cek = mysql_num_rows($sql);


if( $cek ) {
    echo"
    <script>
        alert('Maaf, Kategori Sudah Terdaftar');
        window.location.href='index.php?page=tambah_kategori';
    </script>
    
    ";  
}else{

        mysql_query("INSERT INTO kategori(nama_kategori) VALUES('$kategori')");
        echo"
        <script>
            alert('Pendaftaran Kategori Berhasil');
            window.location.href='index.php?page=tambah_kategori';
        </script>
        ";
   
    
}
	}
	function registrasi($nik,$nama,$username,$password,$telepon){


$sql = mysql_query("SELECT * FROM masyarakat WHERE username = '$username' ");
$cek = mysql_num_rows($sql);


if( $cek ) {
    echo"
    <script>
        alert('Maaf, Username Sudah Terdaftar');
        window.location.href='daftar.html';
    </script>
    
    ";  
}else{

        mysql_query("INSERT INTO masyarakat(nik,nama,username,password,telp) VALUES('$nik','$nama','$username','$password','$telepon')");
        echo"
        <script>
            alert('Pendaftaran Akun Berhasil');
            window.location.href='login_masyarakat.html';
        </script>
        ";
   
    
}
	}
    
}