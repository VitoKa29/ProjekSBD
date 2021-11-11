<?php

include "koneksi.php";

$sql = mysql_query(" SELECT * FROM kategori ");

while ($data = mysql_fetch_array($sql)) {
    echo "<option>$data[nama_kategori]</option>";
}

?>