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
 
	function tampil_data_petugas(){
		$sql = mysql_query(" SELECT * FROM petugas WHERE level='Petugas' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	
	function ubah_petugas($nama,$instansi,$telepon,$id){
		mysql_query(" UPDATE petugas SET nama_petugas='$nama',instansi='$instansi',telp='$telepon' WHERE id_petugas = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_petugas';
    </script>
    
    ";  
	}
    function ubah_admin($nama,$telepon,$id){
		mysql_query(" UPDATE petugas SET nama_petugas='$nama',telp='$telepon' WHERE id_petugas = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_admin';
    </script>
    
    ";  
	}
	function hapus_petugas($id){
		mysql_query(" DELETE FROM petugas WHERE id_petugas = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_petugas';
    </script>
    
    ";  
	}
    function hapus_admin($id){
		mysql_query(" DELETE FROM petugas WHERE id_petugas = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_admin';
    </script>
    
    ";  
	}
    function hapus_instansi($id){
		mysql_query(" DELETE FROM instansi WHERE id_instansi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_instansi';
    </script>
    
    ";  
	}
	function tampil_data_kategori(){
		$sql = mysql_query(" SELECT * FROM kategori ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_instansi(){
		$sql = mysql_query(" SELECT * FROM instansi ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_admin(){
		$sql = mysql_query(" SELECT * FROM petugas WHERE level='Admin' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function ubah_kategori($nama,$id){
		mysql_query(" UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_kategori';
    </script>
    
    ";  
	}
    function ubah_instansi($nama,$id){
		mysql_query(" UPDATE instansi SET nama_instansi='$nama' WHERE id_instansi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_instansi';
    </script>
    
    ";  
	}
	function hapus_kategori($id){
		mysql_query(" DELETE FROM kategori WHERE id_kategori = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_kategori';
    </script>
    
    ";  
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
    function tampil_pengaduan_masuk(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Telah Diajukan' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_diterima(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Terima' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_ditolak(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Tolak' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_diproses(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Di Proses' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_pengaduan_selesai(){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE status = 'Selesai' ");
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
        $sql = mysql_query("SELECT * FROM petugas WHERE username = '$username' AND password = '$password' AND level = 'Admin' ");
$cek = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);

session_start();
$_SESSION["username"] = $data["username"];
$_SESSION["nama"] = $data["nama_petugas"];

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
	
	function input_petugas($nama,$username,$password,$instansi,$telepon){
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

        mysql_query("INSERT INTO petugas(nama_petugas,username,password,telp,level,instansi) VALUES('$nama','$username','$password','$telepon','Petugas','$instansi')");
        echo"
        <script>
            alert('Pendaftaran Petugas Berhasil');
            window.location.href='index.php?page=tambah_petugas';
        </script>
        ";
   
    
}
	}
    function input_admin($nama,$username,$password,$telepon){
		$sql = mysql_query("SELECT * FROM petugas WHERE username = '$username' ");
$cek = mysql_num_rows($sql);


if( $cek ) {
    echo"
    <script>
        alert('Maaf, Username Sudah Terdaftar');
        window.location.href='index.php?page=tambah_admin';
    </script>
    
    ";  
}else{

        mysql_query("INSERT INTO petugas(nama_petugas,username,password,telp,level,instansi) VALUES('$nama','$username','$password','$telepon','Admin','-')");
        echo"
        <script>
            alert('Pendaftaran Admin Berhasil');
            window.location.href='index.php?page=tambah_admin';
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
    function input_instansi($instansi){
		$sql = mysql_query("SELECT * FROM instansi WHERE nama_instansi = '$instansi' ");
$cek = mysql_num_rows($sql);


if( $cek ) {
    echo"
    <script>
        alert('Maaf, Nama Instansi Sudah Terdaftar');
        window.location.href='index.php?page=tambah_instansi';
    </script>
    
    ";  
}else{

        mysql_query("INSERT INTO instansi(nama_instansi) VALUES('$instansi')");
        echo"
        <script>
            alert('Pendaftaran Instansi Berhasil');
            window.location.href='index.php?page=tambah_instansi';
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