<?php
error_reporting(0);

include "koneksi.php";

    $page = $_GET['page'];
	

        switch($page){
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
            default:
                echo "<center><h1 style='margin-top:16%;font-size:50px;'>Selamat Datang Petugas :)</h1></center>";
            break;
        }
		
		
		
?>