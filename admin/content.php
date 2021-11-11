<?php
error_reporting(0);

include "koneksi.php";

    $page = $_GET['page'];
	

        switch($page){
            case "tambah_petugas" :
                include "tambah_petugas.php";
            break;
            case "data_petugas" :
                include "data_petugas.php";
            break;
            case "tambah_admin" :
                include "tambah_admin.php";
            break;
            case "data_admin" :
                include "data_admin.php";
            break;
            case "ubah_petugas" :
                include "ubah_petugas.php";
            break;
            case "ubah_instansi" :
                include "ubah_instansi.php";
            break;
            case "tambah_kategori" :
                include "tambah_kategori.php";
            break;
            case "data_kategori" :
                include "data_kategori.php";
            break;
            case "tambah_instansi" :
                include "tambah_instansi.php";
            break;
            case "data_instansi" :
                include "data_instansi.php";
            break;
            case "ubah_kategori" :
                include "ubah_kategori.php";
            break;
            case "ubah_admin" :
                include "ubah_admin.php";
            break;
            case "pengaduan_masuk" :
                include "pengaduan_masuk.php";
            break;
            case "pengaduan_diterima" :
                include "pengaduan_diterima.php";
            break;
            case "pengaduan_ditolak" :
                include "pengaduan_ditolak.php";
            break;
            case "pengaduan_diproses" :
                include "pengaduan_diproses.php";
            break;
            case "pengaduan_selesai" :
                include "pengaduan_selesai.php";
            break;
            case "detail" :
                include "detail.php";
            break;
            case "tolak" :
                include "tolak.php";
            break;
            case "diproses" :
                include "diproses.php";
            break;
            case "selesai" :
                include "selesai.php";
            break;
            case "profile" :
                include "profile.php";
            break;
            case "laporan_pengaduan" :
                include "laporan_pengaduan.php";
            break;
            default:
                echo "<center><h1 style='margin-top:16%;font-size:50px;'>Selamat Datang Admin :)</h1></center>";
            break;
        }
		
		
		
?>