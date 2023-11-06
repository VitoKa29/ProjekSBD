<?php
error_reporting(0);

include "koneksi.php";

    $page = $_GET['page'];
	

        switch($page){
            
            case "tambah_admin" :
                include "tambah_admin.php";
            break;
            case "data_admin" :
                include "data_admin.php";
            break;
            case "ubah_admin" :
                include "ubah_admin.php";
            break;

            case "data_prodi" :
                include "data_prodi.php";
            break;
            case "tambah_prodi" :
                include "tambah_prodi.php";
            break;
            case "ubah_prodi" :
                include "ubah_prodi.php";
            break;
            
            case "data_sesi" :
                include "data_sesi.php";
            break;
            case "tambah_sesi" :
                include "tambah_sesi.php";
            break;
            case "ubah_sesi" :
                include "ubah_sesi.php";
            break;

            case "profile" :
                include "profile.php";
            break;
            
            case "data_ruangan" :
                include "data_ruangan.php";
            break;
            case "tambah_ruangan" :
                include "tambah_ruangan.php";
            break;
            case "ubah_ruangan" :
                include "ubah_ruangan.php";
            break;

            case "data_matkul" :
                include "data_matkul.php";
            break;
            case "tambah_matkul" :
                include "tambah_matkul.php";
            break;
            case "ubah_matkul" :
                include "ubah_matkul.php";
            break;

            case "data_mahasiswa" :
                include "data_mahasiswa.php";
            break;
            case "tambah_mahasiswa" :
                include "tambah_mahasiswa.php";
            break;
            case "ubah_mahasiswa" :
                include "ubah_mahasiswa.php";
            break;

            default:
                echo "<center><h1 style='margin-top:16%;font-size:50px;'>Selamat Datang Super Admin :)</h1></center>";
            break;
        }
		
		
		
?>