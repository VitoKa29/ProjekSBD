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
 
	function tampil_data(){
		$sql = mysql_query(" SELECT * FROM pengaduan ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
	}
	function tampil_data_saya($nik){
		$sql = mysql_query(" SELECT * FROM pengaduan WHERE nik = '$nik' ");
		while($data = mysql_fetch_array($sql)){
			$hasil[] = $data;
		}
		return $hasil;
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
	function profile($nik){

		$sql = mysql_query(" SELECT * FROM masyarakat WHERE nik = '$nik' ");
		$hasil[] = $data = mysql_fetch_array($sql);
		
		return $hasil;
	}
	function login($username,$password){
        $sql = mysql_query("SELECT * FROM masyarakat WHERE username = '$username' AND password = '$password' ");
$cek = mysql_num_rows($sql);
$data = mysql_fetch_array($sql);

session_start();
$_SESSION["nama"] = $data["nama"];
$_SESSION["nik"] = $data["nik"];

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
        window.location.href='login_masyarakat.html';
    </script>
    ";
}
	}
	
	function input($tanggal,$nik,$judul,$isi,$lokasi,$instansi,$kategori,$gambar){
		session_start();
		$nik = $_SESSION["nik"];
		if( $_POST['kirim'] ){
			if( empty($gambar) ){
			   
					mysql_query(" INSERT INTO pengaduan(tgl_pengaduan,nik,judul,isi_laporan,lokasi,instansi_tujuan,kategori,foto,status) 
						VALUES ('$tanggal','$nik','$judul','$isi','$lokasi','$instansi','$kategori','no_picture.png','Telah Diajukan') ");
					echo "
					<script>
						alert('Laporan Berhasil Diajukan');
						window.location.href = 'index.php?page=buat_pengaduan';
					</script>
				";     
	
			}else{
				
				$ekstensi = array('png','jpg','gif','jpeg');
				$x = explode('.', $gambar);
				$exten = strtolower(end($x));
				
				if(in_array($exten, $ekstensi) === true){
						$file_tmp = $_FILES['gambar']['tmp_name'];
	
						move_uploaded_file($file_tmp, 'gambar/'.$gambar);
					
						mysql_query(" INSERT INTO pengaduan(tgl_pengaduan,nik,judul,isi_laporan,lokasi,instansi_tujuan,kategori,foto,status) 
						VALUES ('$tanggal','$nik','$judul','$isi','$lokasi','$instansi','$kategori','$gambar','Telah Diajukan') ");
					echo "
					<script>
						alert('Laporan Berhasil Diajukan');
						window.location.href = 'index.php?page=buat_pengaduan';
					</script>
				";  
	
					}else{
						echo "
						
							<script>
								alert('Maaf, Salah Ekstensi ');
								window.location.href = 'index.php?page=buat_pengaduan';
							</script>
						";
					}
				
			}
		}else{
			echo "
	
				<script>
					alert('Maaf, Terjadi Kegagalan Sistem ');
					window.location.href = 'index.php?page=buat_pengaduan';
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