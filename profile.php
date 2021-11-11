<style>
    h1{
        margin-top:1%;
        text-align:center;
    }
    table{
        margin-top:3%;
        font-size:18px;
    }
</style>
<?php

include 'proses.php';
$db = new database();
session_start();
$nik = $_SESSION["nik"];

foreach( $db->profile($nik) as $data ){
    
}
    echo "
    <h1>My Profile</h1>
		<table class='table table-bordered'>
			<tr>
				<td><b>NIK</td>
				<td>:</td>
				<td><b>$data[nik]</td>
			</tr>
            <tr>
                <td><b>Username</td>
                <td>:</td>
                <td><b>$data[username]</td>
            </tr>
			
			<tr>
				<td><b>Nama</td>
				<td>:</td>
				<td><b>$data[nama]</td>
			</tr>
			<tr>
				<td><b>Telepon</td>
				<td>:</td>
				<td><b>$data[telp]</td>
			</tr>
		</table>
	";
?>
