<?php
error_reporting(0);

include "koneksi.php";

    $page = $_GET['page'];
	

        switch($page){
            case "buat_pengaduan" :
                include "buat_pengaduan.php";
            break;
            case "data_pengaduan" :
                include "data_pengaduan.php";
            break;
            case "data_pengaduan_semua" :
                include "data_pengaduan_semua.php";
            break;
            case "detail" :
                include "detail.php";
            break;
            case "detail_saya" :
                include "detail_saya.php";
            break;
            case "profile" :
                include "profile.php";
            break;
            case "tentang" :
                include "tentang.php";
            break;
            case "tutorial" :
                include "tutorial.php";
            break;
            default:
                echo "<center><h1 style='margin-top:16%;font-size:50px;'>Selamat Datang Masyarakat :)</h1></center>";
            break;
        }
		
		
		
?>