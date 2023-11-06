<?php
error_reporting(0);

include "koneksi.php";

    $page = $_GET['page'];
	

        switch($page){
            
            case "profile" :
                include "profile.php";
            break;

            case "tambah_pemakaian_ruang" :
                include "tambah_pemakaian_ruang.php";
            break;
            case "data_pemakaian_ruang" :
                include "data_pemakaian_ruang.php";
            break;
            case "ubah_pemakaian_ruang" :
                include "ubah_pemakaian_ruang.php";
            break;

            case "tambah_peminjaman_ruang" :
                include "tambah_peminjaman_ruang.php";
            break;
            case "data_ruangan_dipinjam" :
                include "data_ruangan_dipinjam.php";
            break;
            case "data_peminjaman_ruang" :
                include "data_peminjaman_ruang.php";
            break;
            case "ruangan_dicari" :
                include "ruangan_dicari.php";
            break;
            case "mahasiswa_dicari" :
                include "mahasiswa_dicari.php";
            break;

            default:
                echo "<center><h1 style='margin-top:16%;font-size:50px;'>Selamat Datang Admin :)</h1></center>";
            break;
        }
		
		
		
?>