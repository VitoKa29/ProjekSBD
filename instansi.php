<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM instansi ");

while ($data = mysql_fetch_array($sql)) {
    echo "<option>$data[nama_instansi]</option>";
}

?>