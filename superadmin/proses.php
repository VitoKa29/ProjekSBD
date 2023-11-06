<?php 

class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "biro1";
	
 
	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}	
	
	function ubah_ruangan($gedung,$kapasitas,$id){
		mysql_query(" UPDATE ruangan SET gedung='$gedung',kapasitas='$kapasitas' WHERE nomorRuang = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_ruangan';
    </script>
    
    ";  
	}
    function ubah_admin($nama,$id){
		mysql_query(" UPDATE admin SET nama='$nama' WHERE id_admin = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_admin';
    </script>
    
    ";  
	}
	function hapus_ruangan($id){
		mysql_query(" DELETE FROM ruangan WHERE nomorRuang = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_ruangan';
    </script>
    
    ";  
	}
    function hapus_admin($id){
		mysql_query(" DELETE FROM admin WHERE id_admin = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_admin';
    </script>
    
    ";  
	}
    function hapus_prodi($id){
		mysql_query(" DELETE FROM prodi WHERE kodeProdi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_prodi';
    </script>
    
    ";  
	}
	function tampil_data_sesi(){
		$sql = mysql_query(" SELECT * FROM sesi ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_prodi(){
		$sql = mysql_query(" SELECT * FROM prodi ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_admin(){
		$sql = mysql_query(" SELECT * FROM admin");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_ruangan(){
		$sql = mysql_query(" SELECT * FROM ruangan ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_matkul(){
		$sql = mysql_query(" SELECT * FROM matakuliah inner join prodi on matakuliah.kodeProdi = prodi.kodeProdi ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
    function tampil_data_mahasiswa(){
		$sql = mysql_query(" SELECT * FROM mahasiswa inner join prodi on mahasiswa.kodeProdi = prodi.kodeProdi ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function ubah_sesi($hari,$mulai,$selesai,$id){
		mysql_query(" UPDATE sesi SET hari='$hari',jam_mulai='$mulai',jam_selesai='$selesai' WHERE kodeSesi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_sesi';
    </script>
    
    ";  
	}
    function ubah_matkul($nama,$sks,$prodi,$id){
		mysql_query(" UPDATE matakuliah SET namaMtk='$nama',sks='$sks',kodeProdi='$prodi' WHERE idMtk = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_matkul';
    </script>
    
    "; 
	}
    function ubah_mahasiswa($nama,$sks,$prodi,$id){
		mysql_query(" UPDATE mahasiswa SET nama='$nama',sksTotal='$sks',kodeProdi='$prodi' WHERE nim = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_mahasiswa';
    </script>
    
    "; 
	}
    function ubah_prodi($nama,$fakultas,$id){
		mysql_query(" UPDATE prodi SET namaProdi='$nama', fakultas='$fakultas' WHERE kodeProdi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Diubah');
        window.location.href='index.php?page=data_prodi';
    </script>
    
    ";  
	}
	function hapus_sesi($id){
		mysql_query(" DELETE FROM sesi WHERE kodeSesi = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_sesi';
    </script>
    
    ";  
	}
    function hapus_matkul($id){
		mysql_query(" DELETE FROM matakuliah WHERE idMtk = '$id' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_matkul';
    </script>
    
    ";  
	}
    function profile($username){
        
		$sql = mysql_query(" SELECT * FROM admin WHERE username = '$username' ");
		$hasil[] = $data = mysql_fetch_array($sql);
		
		return $hasil;
	}
	function login($username,$password){
        $sql = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' AND level = 'Super Admin'");
        $cek = mysql_num_rows($sql);
        $data = mysql_fetch_array($sql);
            
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama"] = $data["nama"];
        
        if( $cek ) {
            echo"
            <script>
                alert('Login Berhasil');
                window.location.href='index.php';
            </script>
            tampil_data_
            ";  
        }else{
            echo"
            <script>
                alert('Maaf, Username atau Password yang anda inputkan salah');
                window.location.href='login_super_admin.html';
            </script>
            ";
        }
        	}
	
	function input_sesi($kode,$hari,$mulai,$selesai){
		$sql = mysql_query("SELECT * FROM sesi WHERE kodeSesi = '$kode'");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Sesi Sudah Terdaftar');
                window.location.href='index.php?page=tambah_sesi';
            </script>
            
            ";  
        }else{
        
                mysql_query("INSERT INTO sesi(kodeSesi,hari,jam_mulai,jam_selesai) VALUES('$kode','$hari','$mulai','$selesai')");
                echo"
                <script>
                    alert('Pendaftaran Sesi Berhasil');
                    window.location.href='index.php?page=data_sesi';
                </script>
                ";
        
            
        }
    }
    function input_admin($nama,$username,$password,$level){
		$sql = mysql_query("SELECT * FROM admin WHERE username = '$username' ");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Username Sudah Terdaftar');
                window.location.href='index.php?page=tambah_admin';
            </script>
            
            ";  
        }else{
        
                mysql_query("INSERT INTO admin(nama,username,password,level) VALUES('$nama','$username','$password','$level')");
                echo"
                <script>
                    alert('Pendaftaran Admin Berhasil');
                    window.location.href='index.php?page=data_admin';
                </script>
                ";
        
            
        }
	}

	function input_ruangan($nomor,$gedung,$kapasitas){
		$sql = mysql_query("SELECT * FROM ruangan WHERE nomorRuang = '$nomor' ");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Ruangan Sudah Terdaftar');
                window.location.href='index.php?page=tambah_ruangan';
            </script>
            
            ";  
        }else{
        
                mysql_query("INSERT INTO ruangan(nomorRuang,gedung,kapasitas) VALUES('$nomor','$gedung','$kapasitas')");
                echo"
                <script>
                    alert('Pendaftaran Ruangan Berhasil');
                    window.location.href='index.php?page=data_ruangan';
                </script>
                ";
        
            
        }
	}
    function input_prodi($kode,$nama,$fakultas){
		$sql = mysql_query("SELECT * FROM prodi WHERE kodeProdi = '$kode' or namaProdi='$nama' ");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Kode Prodi atau nama Prodi Sudah Terdaftar');
                window.location.href='index.php?page=tambah_prodi';
            </script>
            
            ";  
        }else{
        
                mysql_query("INSERT INTO prodi(kodeProdi,namaProdi,fakultas) VALUES('$kode','$nama','$fakultas')");
                echo"
                <script>
                    alert('Pendaftaran Prodi Berhasil');
                    window.location.href='index.php?page=data_prodi';
                </script>
                ";
        
            
        }
	}
    function input_matkul($id,$nama,$prodi,$sks){
		$sql = mysql_query("SELECT * FROM matakuliah WHERE idMtk = '$id' ");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, ID Mata Kuliah Sudah Terdaftar');
                window.location.href='index.php?page=tambah_matkul';
            </script>
            
            ";  
        }else{
        
            mysql_query("INSERT INTO matakuliah(idMtk,namaMtk,kodeProdi,sks) VALUES('$id','$nama','$prodi','$sks')");
            echo"
            <script>
                alert('Pendaftaran Mata Kuliah Berhasil');
                window.location.href='index.php?page=data_matkul';
            </script>
            ";
        
            
        }
	}
    function input_mahasiswa($nim,$nama,$prodi,$sks){
		$sql = mysql_query("SELECT * FROM mahasiswa WHERE nim = '$nim' ");
        $cek = mysql_num_rows($sql);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Nim Sudah Terdaftar');
                window.location.href='index.php?page=tambah_mahasiswa';
            </script>
            
            ";  
        }else{
        
            mysql_query("INSERT INTO mahasiswa(nim,nama,kodeProdi,sksTotal) VALUES('$nim','$nama','$prodi','$sks')");
            echo"
            <script>
                alert('Pendaftaran Mahasiswa Berhasil');
                window.location.href='index.php?page=data_mahasiswa';
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