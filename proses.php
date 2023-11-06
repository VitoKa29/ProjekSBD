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
 
	function tampil_data_ruang(){
		$sql = mysql_query(" SELECT * FROM jadwalkuliah inner join matakuliah on jadwalkuliah.idMtk = matakuliah.idMtk
								inner join ruangan on jadwalkuliah.nomorRuang = ruangan.nomorRuang
								inner join sesi on jadwalkuliah.kodeSesi = sesi.kodeSesi
		 ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function tampil_data_dipinjam(){
		$sql = mysql_query(" SELECT * FROM peminjaman inner join mahasiswa on peminjaman.nim = mahasiswa.nim
								inner join ruangan on peminjaman.nomorRuang = ruangan.nomorRuang
								inner join sesi on peminjaman.kodeSesi = sesi.kodeSesi
		 ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function profile($username){

		$sql = mysql_query(" SELECT * FROM admin WHERE username = '$username' ");
		$hasil[] = $data = mysql_fetch_array($sql);
		
		return $hasil;
	}
	function login($username,$password){
        $sql = mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' AND level = 'Admin' ");
		$cek = mysql_num_rows($sql);
		$data = mysql_fetch_array($sql);
			
		session_start();
		$_SESSION["nama"] = $data["nama"];
		$_SESSION["username"] = $data["username"];
			
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
	
	function tambah_pemakaian_ruang($matkul,$tahun,$semester,$grup,$ruangan,$sesi){
		$sql = mysql_query("SELECT * FROM jadwalkuliah WHERE idMtk = '$matkul' and tahun = '$tahun' and semester = '$semester' and grup = '$grup'");
        $cek = mysql_num_rows($sql);

		$sql1 = mysql_query("SELECT * FROM jadwalkuliah WHERE nomorRuang = '$ruangan' and kodeSesi = '$sesi'");
        $cek1 = mysql_num_rows($sql1);


        if( $cek ) {
            echo"
            <script>
                alert('Maaf, Jadwal Mata Kuliah Sudah Terdaftar');
                window.location.href='index.php?page=tambah_pemakaian_ruang';
            </script>
            
            ";  
        }elseif( $cek1 ){
			echo"
            <script>
                alert('Maaf, Ruangan Sudah Terpakai');
                window.location.href='index.php?page=tambah_pemakaian_ruang';
            </script>
            
            ";  
		}
		else{
        
                mysql_query("INSERT INTO jadwalkuliah(idMtk,tahun,semester,grup,nomorRuang,kodeSesi) VALUES('$matkul','$tahun','$semester','$grup','$ruangan','$sesi')");
                echo"
                <script>
                    alert('Pendaftaran Jadwal Mata Kuliah Berhasil');
                    window.location.href='index.php?page=tambah_pemakaian_ruang';
                </script>
                ";
        
            
        }
    }
	function tambah_peminjaman_ruang($nim,$ruangan,$sesi,$tanggal,$keterangan){

        mysql_query("INSERT INTO peminjaman(nim,nomorRuang,kodeSesi,keterangan,tglPinjam) VALUES('$nim','$ruangan','$sesi','$keterangan','$tanggal')");
        echo"
        <script>
            alert('Peminjaman Berhasil !!');
            window.location.href='index.php?page=tambah_peminjaman_ruang';
        </script>
        ";
        
            
    }
	function hapus_pemakaian_ruang($matkul,$tahun,$semester,$grup){
		mysql_query(" DELETE FROM jadwalkuliah WHERE idMtk = '$matkul' and tahun = '$tahun' and semester = '$semester' and grup = '$grup' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_pemakaian_ruang';
    </script>
    
    ";  
	}
	function hapus_peminjaman_ruang($nim,$ruangan,$sesi){
		mysql_query(" DELETE FROM peminjaman WHERE nim = '$nim' and nomorRuang = '$ruangan' and kodeSesi = '$sesi' ");
		echo"
    <script>
        alert('Data Berhasil Dihapus');
        window.location.href='index.php?page=data_ruangan_dipinjam';
    </script>
    
    ";  
	}
	function registrasi($nama,$username,$password){


		$sql = mysql_query("SELECT * FROM admin WHERE username = '$username' ");
		$cek = mysql_num_rows($sql);
			
			
		if( $cek ) {
		    echo"
		    <script>
		        alert('Maaf, Username Sudah Terdaftar');
		        window.location.href='daftar.html';
		    </script>
		
		    ";  
		}else{
		
		        mysql_query("INSERT INTO admin(nama,username,password) VALUES('$nama','$username','$password')");
		
		        echo"
		        <script>
		            alert('Pendaftaran Akun Berhasil');
		            window.location.href='daftar.html';
		        </script>
		        ";
		
		
		}	
	}
    
}