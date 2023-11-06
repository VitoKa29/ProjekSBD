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
$username = $_SESSION["username"];

foreach( $db->profile($username) as $data ){
    
}
    echo "
    <h1>My Profile</h1>
		<table class='table table-bordered'>
            <tr>
                <td><b>Username</td>
                <td>:</td>
                <td><b>$data[username]</td>
            </tr>
			<tr>
				<td><b>Level</td>
				<td>:</td>
				<td><b>$data[level]</td>
			</tr>
			<tr>
				<td><b>Nama</td>
				<td>:</td>
				<td><b>$data[nama]</td>
			</tr>
		</table>
	";
?>
